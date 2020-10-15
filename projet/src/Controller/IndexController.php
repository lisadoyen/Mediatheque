<?php

namespace App\Controller;

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
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_accueil');
        }
        if($this->isGranted('ROLE_ADHERENT')) {
            return $this->redirectToRoute('adherent_accueil');
        }
        if($this->isGranted('ROLE_BENEVOLE')) {
            return $this->redirectToRoute('benevole_accueil');
        }
        else {
            return $this->redirectToRoute('security_login');
        }
    }
}