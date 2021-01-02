<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        if($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('accueil');
        } else {
            return $this->redirectToRoute('security_login');
        }
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(AnnonceRepository $ar)
    {
        return $this->render('accueil.html.twig', [
            'annonces' => $ar->findAll()
        ]);
    }

    /**
     * @Route("/crud_list", name="crud_list")
     */
    public function crudlist() {
        return $this->render('crud_list.html.twig');
    }
}