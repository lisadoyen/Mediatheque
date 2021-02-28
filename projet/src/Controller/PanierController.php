<?php

namespace App\Controller;

use App\Entity\Enregistrement;
use App\Entity\Favoris;
use App\Entity\Panier;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\FavorisRepository;
use App\Repository\PanierRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEnregistrementRepository;
use App\Service\MailerService;
use Dompdf\Dompdf;
use Dompdf\Options;
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
    public function addArticlePanier(ArticleRepository $articleRepository, TypeEnregistrementRepository $typeEnregistrementRepository,
                                     PanierRepository $panierRepository,StatutRepository $statutRepository, $id= 1)
    {
        $user = $this->getUser();
        $article = $articleRepository->findOneBy(['id' => $id]);

        $verifFav = $panierRepository->findOneBy(['utilisateur'=>$user,'article'=>$article]);

        if (!$verifFav){
            $statut = $article->getStatut()->getLibelle();
            $lignePanier = new Panier();
            $lignePanier->setUtilisateur($user);
            $lignePanier->setArticle($article);

            if ($statut == "empruntable") {
                $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle' => 'emprunt']));
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'reserve_emprunt']));
            } else if ($statut == "vendable") {
                $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle' => 'achat']));
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'reserve_achat']));
            }
            $this->getDoctrine()->getManager()->persist($article);
            $this->getDoctrine()->getManager()->persist($lignePanier);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "L'article \"" . $lignePanier->getArticle()->getTitre() . "\" a bien été ajouté de votre panier");
        }
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/remove/{id}", name="remove_article_panier")
     */
    public function removeArticlePanier(PanierRepository $panierRepository,TypeEnregistrementRepository $typeEnregistrementRepository, StatutRepository $statutRepository, $id=1){
        $user = $this->getUser();
        $lignePanier = $panierRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);
        $article = $lignePanier->getArticle();
        $statut = $lignePanier->getArticle()->getStatut()->getLibelle();

        if ($statut == "reserve_emprunt") {
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'empruntable']));
        } else if ($statut == "reserve_achat") {
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendable']));
        }

        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->remove($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success',"L'article \"".$lignePanier->getArticle()->getTitre()."\" a bien été supprimé de votre panier");

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/move/{id}/favoris", name="move_article_panier_favoris")
     */
    public function moveArticlePanierFavoris(PanierRepository $panierRepository, FavorisRepository $favorisRepository,StatutRepository $statutRepository, $id = 1)
    {
        $user = $this->getUser();
        $lignePanier = $panierRepository->findOneBy(['article' => $id, 'utilisateur' => $user]);

        $verifFav = $favorisRepository->findOneBy(['utilisateur'=>$user,'article'=>$lignePanier->getArticle()]);

        if(!$verifFav) {
            $favoris = new Favoris();
            $favoris->setUtilisateur($user);
            $favoris->setArticle($lignePanier->getArticle());

            $article = $lignePanier->getArticle();
            $statut = $lignePanier->getArticle()->getStatut()->getLibelle();

            if ($statut == "reserve_emprunt") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'empruntable']));
            } else if ($statut == "reserve_achat") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendable']));
            }

            $this->getDoctrine()->getManager()->persist($favoris);
            $this->getDoctrine()->getManager()->persist($article);

            $this->addFlash('success', "L'article \"" . $lignePanier->getArticle()->getTitre() . "\" a bien été supprimé de votre panier et ajouté à vos favoris !");
        }

        $this->getDoctrine()->getManager()->remove($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/vider", name="vider_panier", methods={"DELETE"})
     */
    public function viderPanier(PanierRepository $panierRepository,StatutRepository $statutRepository, Request $request)
    {
        if(!$this->isCsrfTokenValid('panier_delete', $request->get('token'))) {
            throw new  InvalidCsrfTokenException('Invalid CSRF token delete panier');
        }
        $user = $this->getUser();
        $panier = $panierRepository->findBy(['utilisateur'=>$user]);

        foreach ($panier as $lignePanier){
            $article = $lignePanier->getArticle();
            $statut = $lignePanier->getArticle()->getStatut()->getLibelle();

            if ($statut == "reserve_emprunt") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'empruntable']));
            } else if ($statut == "reserve_achat") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendable']));
            }

            $this->getDoctrine()->getManager()->persist($article);
            $this->getDoctrine()->getManager()->remove($lignePanier);
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
     * @param PanierRepository $panierRepository
     * @param StatutEnregistrementRepository $statutEnregistrementRepository
     * @param StatutRepository $statutRepository
     * @param ActionRepository $actionRepository
     * @param TypeActionRepository $typeActionRepository
     * @param Request $request
     * @param MailerService $mailerService
     * @param $enregistrementRepository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function validerPanier(PanierRepository $panierRepository, StatutEnregistrementRepository  $statutEnregistrementRepository,
                                  StatutRepository $statutRepository, ActionRepository $actionRepository, TypeActionRepository $typeActionRepository,
                                  Request $request, MailerService $mailerService,EnregistrementRepository $enregistrementRepository, CategorieRepository  $categorieRepository)
    {
        if(!$this->isCsrfTokenValid('valider_panier', $request->get('token'))) {
            throw new  InvalidCsrfTokenException('Invalid CSRF token valider panier');
        }

       $user = $this->getUser();
       $panier = $panierRepository->findBy(['utilisateur'=>$user]);
       $dateAjd = new \DateTime('now');

        // Règle d'emprunt : Nombre d'emprunt
       $nbLivre = 0;
       $nbVideo = 0;
       $nbMusique = 0;
       $nbJeu = 0;

       foreach ($panier as $ligne){
           $categorie = $ligne->getArticle()->getCategorie();
           $libelleType = $ligne->getTypeEnregistrement()->getLibelle();

           if ($categorie->getLibelle() =="livre") {
               if ($nbLivre+1 <= $categorie->getNbEmpruntMax()){
                   $nbLivre++;
               } else {
                   $this->addFlash(
                       'danger',
                       "Votre panier dépasse le nombre  d'articles par commande qui est de ".$categorie->getNbEmpruntMax()." pour les livres.\nSi vous voulez valider cette commande, suprimer un livre de votre panier."
                   );
                   return $this->redirectToRoute('panier');
               }
           }
           if ($categorie->getLibelle() =="video") {
               if ($nbVideo+1 <= $categorie->getNbEmpruntMax()){
                   $nbVideo++;
               } else {
                   $this->addFlash(
                       'danger',
                       "Votre panier dépasse le nombre  d'articles par commande qui est de ".$categorie->getNbEmpruntMax()." pour les videos.\nSi vous voulez valider cette commande, suprimer une video de votre panier."
                   );
                   return $this->redirectToRoute('panier');
               }
           }
           if ($categorie->getLibelle() =="musique") {
               if ($nbMusique+1 <= $categorie->getNbEmpruntMax()){
                   $nbMusique++;
               } else {
                   $this->addFlash(
                       'danger',
                       "Votre panier dépasse le nombre  d'articles par commande qui est de ".$categorie->getNbEmpruntMax()." pour les musiques.\nSi vous voulez valider cette commande, suprimer une musique de votre panier."
                   );
                   return $this->redirectToRoute('panier');
               }
           }
           if ($categorie->getLibelle() =="jeu") {
               if ($nbJeu+1 <= $categorie->getNbEmpruntMax()){
                   $nbJeu++;
               } else {
                   $this->addFlash(
                       'danger',
                       "Votre panier dépasse le nombre  d'articles par commande qui est de ".$categorie->getNbEmpruntMax()." pour les jeux.\nSi vous voulez valider cette commande, suprimer un jeu de votre panier."
                   );
                   return $this->redirectToRoute('panier');
               }
           }

           if (($libelleType == "achat" and $user->getDroitAchat()) or ($libelleType =="emprunt" and $user->getDroitEmprunt())) {
                if ($categorie)
               // contruction de l'enregistrement / emprunt
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

               // Règle d'emprunt : Durée de l'emprunt
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

               // défini le statut de l'emprunt
               if ($ligne->getTypeEnregistrement()->getLibelle() == "achat") {
                   $enregistrement->getArticle()->setStatut($statutRepository->findOneBy(['libelle' => 'reserve_achat']));
               }
               if ($ligne->getTypeEnregistrement()->getLibelle() == "emprunt"){
                   $enregistrement->getArticle()->setStatut($statutRepository->findOneBy(['libelle'=>'reserve_emprunt']));
               }

               $this->getDoctrine()->getManager()->persist($enregistrement);
           } else {
               $this->addFlash('danger',"Vous n'avez pas le droit d'acheter ou d'emprunter un article. Veuillez contacter un responsable pour plus de renseignements.");
               return $this->redirectToRoute('panier');
           }
       }

        $totalAchat = 0;
        foreach ($panier as $article){
            if ($article->getTypeEnregistrement()->getLibelle() =="achat" and $article->getArticle()->getStatut()->getLibelle() != "vendu"){
                $totalAchat = $totalAchat + $article->getArticle()->getMontantVente();
            }
        }
        foreach ($panier as $article){
            $this->getDoctrine()->getManager()->remove($article);
        }
        $this->getDoctrine()->getManager()->flush();

        $enregistrements = $enregistrementRepository->findBy(['dateEnregistrement'=>$dateAjd]);


        //  regrouper par catégorie
        $livres = $enregistrementRepository->findByCategorie($categorieRepository->findOneBy(['libelle'=>'livre']),$dateAjd);
        $musiques = $enregistrementRepository->findByCategorie($categorieRepository->findOneBy(['libelle'=>'musique']),$dateAjd);
        $jeux = $enregistrementRepository->findByCategorie($categorieRepository->findOneBy(['libelle'=>'jeu']),$dateAjd);
        $videos = $enregistrementRepository->findByCategorie($categorieRepository->findOneBy(['libelle'=>'video']),$dateAjd);

        $enregistrements = [$livres, $musiques, $jeux, $videos];
        // pour chaque catégorie
        foreach ($enregistrements as $enregistrement){
            // vérifier sur quelles adresses envoyer au client
            // envoyer le mail au client selon la catégorie et ses adresses
            // TODO catégorie mail
            if ($enregistrement != null){
                if ($user->getEmailPro() == null and $user->getEmailPerso() == null){
                    if ($user->getNotificationPro()){
                        $mailerService->send(
                            'test',
                            "Commande du ".date('Y-m-d-H-i-s'),
                            "no-reply@mediathalesbrest.com",
                            $user->getEmailRecup()."",
                            "users/profil/mail/commande_recap.html.twig",
                            ['enregistrement' => $enregistrement,'total' => $totalAchat, 'date'=>$dateAjd]
                        );
                    }
                } else {
                    if ($user->getNotificationPro()){
                        $mailerService->send(
                            "test",
                            "Commande du ".date('Y-m-d-H-i-s'),
                            "no-reply@mediathalesbrest.com",
                            $user->getEmailPro()."",
                            "users/profil/mail/commande_recap.html.twig",
                            ['enregistrement' => $enregistrement,'total' => $totalAchat, 'date'=>$dateAjd]
                        );
                    }
                    if ($user->getNotificationPerso()){
                        $mailerService->send(
                            "test",
                            "Commande du ".date('Y-m-d-H-i-s'),
                            "no-reply@mediathalesbrest.com",
                            $user->getEmailPerso(),
                            "users/profil/mail/commande_recap.html.twig",
                            ['enregistrement' => $enregistrement,'total' => $totalAchat, 'date'=>$dateAjd]
                        );
                    }
                }
            }

        }

        //TODO envoyer a tous les bénévoles

        $this->addFlash('success',"Votre panier a bien été validé !");

        return $this->redirectToRoute('emprunts_actif');
    }
}















