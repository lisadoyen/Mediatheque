<?php

namespace App\Controller;

use App\Entity\Favoris;
use App\Entity\Panier;
use App\Repository\ArticleRepository;
use App\Repository\FavorisRepository;
use App\Repository\PanierRepository;
use App\Repository\TypeEnregistrementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function panier(PanierRepository $panierRepository)
    {
        $panier = $panierRepository->findBy(['utilisateur' => $this->getUser()]);
        $totalAchat = 0;
        foreach ($panier as $article){
            if ($article->getTypeEnregistrement()->getLibelle() =="achat" and $article->getArticle()->getStatut()->getLibelle() != "vendu"){
                $totalAchat = $totalAchat + $article->getArticle()->getMontantVente();
            }
        }

        return $this->render('users/profil/panier.html.twig', ['panier' => $panier, 'totalAchat' => $totalAchat]);
    }

    /**
     * @Route("/panier/add/{id}", name="add_article_panier")
     */
    public function addArticlePanier(ArticleRepository $articleRepository,TypeEnregistrementRepository $typeEnregistrementRepository, $id=1){
        $user = $this->getUser();
        $article = $articleRepository->findOneBy(['id' => $id]);
        $statut = $article->getStatut()->getLibelle();
        $lignePanier = new Panier();
        $lignePanier->setUtilisateur($user);
        $lignePanier->setArticle($article);

        if ($statut == "empruntable" or $statut =="emprunte") {
            $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle'=>'emprunt']));
        } else if ($statut == "vendable" or $statut =="vendu") {
            $lignePanier->setTypeEnregistrement($typeEnregistrementRepository->findOneBy(['libelle'=>'achat']));
        }

        //TODO verfier que l'article n'est pas le panier

        $this->getDoctrine()->getManager()->persist($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success',"L'article \"".$lignePanier->getArticle()->getTitre()."\" a bien été ajouté de votre panier");

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
    public function moveArticlePanierFavoris(PanierRepository $panierRepository, $id=1){
        $user = $this->getUser();
        $lignePanier = $panierRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $favoris = new Favoris();
        $favoris->setUtilisateur($user);
        $favoris->setArticle($lignePanier->getArticle());

        $this->getDoctrine()->getManager()->persist($favoris);
        $this->getDoctrine()->getManager()->remove($lignePanier);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success',"L'article \"".$lignePanier->getArticle()->getTitre()."\" a bien été supprimé de votre panier et ajouté à vos favoris !");

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
}














