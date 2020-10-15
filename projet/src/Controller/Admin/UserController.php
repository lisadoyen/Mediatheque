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
class UserController extends AbstractController
{
    /**
    * @Route("/admin/user", name="admin_user")
    */
    public function accueilIndex()
    {
        return $this->render('admin/accueil.html.twig');
    }
    

}
