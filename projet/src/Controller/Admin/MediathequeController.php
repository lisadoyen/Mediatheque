<?php

namespace App\Controller\Admin;
use App\Entity\Bibliotheque;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MediathequeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index(Request $request) {
        return $this->render('home.html.twig');
    }

    /**
    * @Route("/mediatheque/show", name="mediatheque_show",methods={"GET"})
    */
    public function showMediatheque()
    {
        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $articles = $repository ->findAll();
        return $this->render('pages/showMediatheque.html.twig', ['articles' => $articles, 'limit' => $limite]);
    }

}
