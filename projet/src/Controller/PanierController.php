<?php

namespace App\Controller;

use App\Entity\Enregistrement;
use App\Entity\Favoris;
use App\Entity\Panier;
use App\Entity\StatutEnregistrement;
use App\Entity\TypeAction;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\FavorisRepository;
use App\Repository\PanierRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEnregistrementRepository;
use App\Service\Article\Nouveaute;
use Dompdf\Dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function panier(PanierRepository $panierRepository, TypeEnregistrementRepository $typeEnregistrementRepository)
    {
        $panierAchat = $panierRepository->findBy(['utilisateur' => $this->getUser(), 'typeEnregistrement' => $typeEnregistrementRepository->findBy(['libelle' => 'achat' ])]);
        $panierEmprunt = $panierRepository->findBy(['utilisateur' => $this->getUser(), 'typeEnregistrement' => $typeEnregistrementRepository->findBy(['libelle' => 'emprunt' ])]);
        $totalAchat = 0;
        foreach ($panierAchat as $article){
            if ($article->getTypeEnregistrement()->getLibelle() =="achat" and $article->getArticle()->getStatut()->getLibelle() != "vendu"){
                $totalAchat = $totalAchat + $article->getArticle()->getMontantVente();
            }
        }

        return $this->render('users/profil/panier.html.twig', [
            'achat' => $panierAchat,
            'emprunt' => $panierEmprunt,
            'totalAchat' => $totalAchat,
            'totalPanier' => count($panierAchat) + count($panierEmprunt)
        ]);
    }

    /**
     * @Route("/panier/add/{id}", name="add_article_panier")
     */
    public function addArticlePanier(ArticleRepository $articleRepository, TypeEnregistrementRepository $typeEnregistrementRepository,PanierRepository $panierRepository,$id = 1)
    {
        $user = $this->getUser();
        $article = $articleRepository->findOneBy(['id' => $id]);

        $verifFav = $panierRepository->findOneBy(['utilisateur'=>$user,'article'=>$article]);

        if (!$verifFav){
            $statut = $article->getStatut()->getLibelle();
            $lignePanier = new Panier();
            $lignePanier->setUtilisateur($user);
            $lignePanier->setArticle($article);

            if ($statut == "empruntable" or $statut == "emprunte") {
                $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle' => 'emprunt']));
            } else if ($statut == "vendable" or $statut == "vendu") {
                $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle' => 'achat']));
            }
            $this->getDoctrine()->getManager()->persist($lignePanier);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "L'article \"" . $lignePanier->getArticle()->getTitre() . "\" a bien été ajouté de votre panier");
        }
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/remove/{id}", name="remove_article_panier")
     */
    public function removeArticlePanier(PanierRepository $panierRepository, $id=1){
        $user = $this->getUser();
        $lignePanier = $panierRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $this->getDoctrine()->getManager()->remove($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success',"L'article \"".$lignePanier->getArticle()->getTitre()."\" a bien été supprimé de votre panier");

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/move/{id}/favoris", name="move_article_panier_favoris")
     */
    public function moveArticlePanierFavoris(PanierRepository $panierRepository, FavorisRepository $favorisRepository, $id = 1)
    {
        $user = $this->getUser();
        $lignePanier = $panierRepository->findOneBy(['article' => $id, 'utilisateur' => $user]);

        $verifFav = $favorisRepository->findOneBy(['utilisateur'=>$user,'article'=>$lignePanier->getArticle()]);

        if(!$verifFav) {
            $favoris = new Favoris();
            $favoris->setUtilisateur($user);
            $favoris->setArticle($lignePanier->getArticle());

            $this->getDoctrine()->getManager()->persist($favoris);


            $this->addFlash('success', "L'article \"" . $lignePanier->getArticle()->getTitre() . "\" a bien été supprimé de votre panier et ajouté à vos favoris !");
        }
        $this->getDoctrine()->getManager()->remove($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/vider", name="vider_panier", methods={"DELETE"})
     */
    public function viderPanier(PanierRepository $panierRepository, Request $request)
    {
        if(!$this->isCsrfTokenValid('panier_delete', $request->get('token'))) {
            throw new  InvalidCsrfTokenException('Invalid CSRF token delete panier');
        }
        $user = $this->getUser();
        $panier = $panierRepository->findBy(['utilisateur'=>$user]);

        foreach ($panier as $article){
            $this->getDoctrine()->getManager()->remove($article);
            $this->getDoctrine()->getManager()->flush();
        }

        $this->addFlash('success',"Votre panier a bien été vidé !");

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/recap", name="recap_panier")
     */
    public function recapPanier(PanierRepository $panierRepository, EnregistrementRepository $enregistrementRepository)
    {
        $user = $this->getUser();
        $panier = $panierRepository->findBy(['utilisateur'=>$user]);
        $dernierEnregistrements = $enregistrementRepository->findOneBy([],['dateEnregistrement'=>'DESC']);
        $dateDerniereCommande = $dernierEnregistrements->getDateEnregistrement();
        $dernierArticlesCommande = $enregistrementRepository->findBy(['dateEnregistrement'=>$dateDerniereCommande]);

        $totalAchat = 0;
        foreach ($panier as $article){
            if ($article->getTypeEnregistrement()->getLibelle() =="achat" and $article->getArticle()->getStatut()->getLibelle() != "vendu"){
                $totalAchat = $totalAchat + $article->getArticle()->getMontantVente();
            }
        }

        $pdfOption = new Options();
        $pdfOption->set('defaultFont','Roboto');
        $pdfOption->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($pdfOption);
        $context = stream_context_create([
            'ssl' => [
                'verfify_peer' => FALSE,
                'verfify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        $html = $this->renderView('users/profil/panier_recap_pdf.html.twig', [
            'enregistrement' => $dernierArticlesCommande,
            'total' => $totalAchat,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $file = 'panier-'.date('Y-m-d-H-i-s').'.pdf';

        $dompdf->stream($file,[
            'Attachement' => true
        ]);

        return new Response();
    }

    /**
     * @Route("/panier/valider", name="valider_panier")
     */
    public function validerPanier(PanierRepository $panierRepository, StatutEnregistrementRepository  $statutEnregistrementRepository,
                                  StatutRepository $statutRepository, ActionRepository $actionRepository,TypeActionRepository $typeActionRepository,Request $request)
    {
        if(!$this->isCsrfTokenValid('valider_panier', $request->get('token'))) {
            throw new  InvalidCsrfTokenException('Invalid CSRF token valider panier');
        }

       $user = $this->getUser();
       $panier = $panierRepository->findBy(['utilisateur'=>$user]);
       $dateAjd = new \DateTime('now');

       //TODO vérifier le nombre d'emprunt, règle d'emprunt
       foreach ($panier as $ligne){
           $categorie = $ligne->getArticle()->getCategorie();
           if (($ligne->getTypeEnregistrement()->getLibelle() == "achat" and $user->getDroitAchat()) or ($ligne->getTypeEnregistrement()->getLibelle() =="emprunt" and $user->getDroitEmprunt())) {

               $enregistrement = new Enregistrement();
               $idCommande = $dateAjd->format("YmdHis").$user->getId().$ligne->getArticle()->getId().$ligne->getArticle()->getCategorie()->getId().$ligne->getTypeEnregistrement()->getId();
               $enregistrement->setNoCommande($idCommande);
               $enregistrement->setArticle($ligne->getArticle());
               $enregistrement->setUtilisateur($user);
               $enregistrement->setTypeEnregistrement($ligne->getTypeEnregistrement());
               $enregistrement->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'en attente']));
               $enregistrement->setDateEnregistrement($dateAjd);
               $enregistrement->setDateRendu(null);
               $enregistrement->setDatePreparationFini(null);


               $action = $actionRepository->findOneBy(['article'=>$ligne->getArticle(), 'typeAction'=>$typeActionRepository->findOneBy(['libelle'=>'creation'])]);
               $dateCreation = $action->getDate();
               $finNouveaute = $dateCreation->add(new \DateInterval('P'.$categorie->getDureeNouveaute().'D'));
               $dateRendu = new \DateTime('now');
               if ($finNouveaute >= $dateAjd){
                   //nouveauté
                   $nbJours = $categorie->getDureeEmpruntMaxNouveaute();
               } else {
                   // pas nouveauté
                   $nbJours = $categorie->getDureeEmpruntMax();
               }
               $dateRendu->add(new \DateInterval('P'.$nbJours.'D')); // + $nbJours
               $enregistrement->setDateRenduTheorique($dateRendu);



               if ($ligne->getTypeEnregistrement()->getLibelle() == "achat") {
                   $enregistrement->getArticle()->setStatut($statutRepository->findOneBy(['libelle' => 'vendu']));
               }
               if ($ligne->getTypeEnregistrement()->getLibelle() == "emprunt"){
                   $enregistrement->getArticle()->setStatut($statutRepository->findOneBy(['libelle'=>'emprunte']));
               }

               $this->getDoctrine()->getManager()->persist($enregistrement);
           }
       }
       foreach ($panier as $article){
           $this->getDoctrine()->getManager()->remove($article);
       }
       $this->getDoctrine()->getManager()->flush();

       $this->addFlash('success',"Votre panier a bien été validé !");

       return $this->redirectToRoute('emprunts_actif');
    }
}















