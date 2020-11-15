<?php

namespace App\Controller\Admin;
use App\Entity\Bibliotheque;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class MediathequeControllerAdmin extends AbstractController
{
    /**
    * @Route("/admin", name="admin_accueil",methods={"GET"})
    */
    public function accueilIndex()
    {
        return $this->render('admin/accueil.html.twig');
    }
    /**
    * @Route("/admin/bibliotheque/show", name="admin_bibliotheque_show",methods={"GET"})
    */
    public function showBibliotheque()
    {
        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $livres = $repository ->findAll();
        return $this->render('admin/showBibliotheque.html.twig', ['livres' => $livres, 'limit' => $limite]);
    }

}
