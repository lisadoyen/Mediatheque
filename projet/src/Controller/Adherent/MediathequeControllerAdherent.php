<?php

namespace App\Controller\Adherent;
use App\Entity\Bibliotheque;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADHERENT")
 */
class MediathequeControllerAdherent extends AbstractController
{
    /**
    * @Route("/adherent", name="adherent_accueil")
    */
    public function accueilIndex()
    {
        return $this->render('adherent/accueil.html.twig');
    }

    /**
    * @Route("/adherent/mediatheque/show", name="adherent_mediatheque_show",methods={"GET"})
    */
    public function showBibliotheque()
    {
        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $livres = $repository ->findAll();
        return $this->render('adherent/showBibliotheque.html.twig', ['livres' => $livres, 'limit' => $limite]);
    }
}
