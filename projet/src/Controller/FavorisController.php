<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\FavorisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/favoris")
 */
class FavorisController extends AbstractController
{
    public function isFavourite($idArticle, FavorisRepository $favorisRepository, ArticleRepository $articleRepository){
        $article = $articleRepository->find($idArticle);
        $favori = null;
        $favori = $favorisRepository->findOneBy(['utilisateur'=>$this->getUser(), 'article'=>$article]);
        return $this->render('favoris/isFavourite.html.twig', [
            'favoris' => $favori,
            'article' => $article
        ]);
    }
}