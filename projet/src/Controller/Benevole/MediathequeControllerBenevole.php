<?php

namespace App\Controller\Benevole;
use App\Entity\Bibliotheque;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_BENEVOLE")
 */
class MediathequeControllerBenevole extends AbstractController
{
    /**
    * @Route("/benevole", name="benevole_accueil",methods={"GET"})
    */
    public function accueilIndex()
    {
        return $this->render('benevole/accueil.html.twig');
    }

    /**
    * @Route("/benevole/mediatheque/show", name="benevole_mediatheque_show",methods={"GET"})
    */
    public function showBibliotheque()
    {
        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $livres = $repository ->findAll();
        return $this->render('benevole/showBibliotheque.html.twig', ['livres' => $livres, 'limit' => $limite]);
    }

}
