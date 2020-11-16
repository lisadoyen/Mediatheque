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
        } else if($this->isGranted('ROLE_ADHERENT')) {
            return $this->redirectToRoute('adherent_accueil');
        }else if($this->isGranted('ROLE_BENEVOLE')) {
            return $this->redirectToRoute('benevole_accueil');
        }
        else {
            return $this->redirectToRoute('security_login');
        }
    }

    /**
     * @Route("/livres", name="livres")
     */
    public function livres(Request $request)
    {

        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_bibliotheque_show');
        } else if($this->isGranted('ROLE_ADHERENT')) {
            return $this->redirectToRoute('adherent_bibliotheque_show');
        }else if($this->isGranted('ROLE_BENEVOLE')) {
            return $this->redirectToRoute('benevole_bibliotheque_show');
        }
        else {
            return $this->redirectToRoute('security_login');
        }
    }


}