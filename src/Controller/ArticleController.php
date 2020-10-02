<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Mediatheque;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        $repository = $this->getDoctrine()->getRepository(Mediatheque::class);
        $articles = $repository->findAll();

        return $this->render('article/home.html.twig',[
            'articles' => $articles
        ]);
    }
}
