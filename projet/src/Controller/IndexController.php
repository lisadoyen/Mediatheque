<?php

namespace App\Controller;

use App\Controller\Articles\ArticleController;
use App\Entity\Article;
use App\Repository\ActionRepository;
use App\Repository\AnnonceRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Service\Nouveaute;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DependencyInjection\ControllerArgumentValueResolverPass;
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
     * @param AnnonceRepository $ar
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param ArticleRepository $articleRepo
     * @param Nouveaute $new
     * @return Response
     */
    public function accueil(AnnonceRepository $ar, CategorieRepository $categorieRepo,
                            ActionRepository $actionsRepo, ArticleRepository $articleRepo, Nouveaute $new)
    {

        return $this->render('accueil.html.twig', [
            'annonces' => $ar->findAll(),
            'nouveaute' => $nouveaute = $new->findArticleNouveaute($categorieRepo, $actionsRepo,3)
        ]);
    }

    /**
     * @Route("/crud_list", name="crud_list")
     */
    public function crudlist() {
        return $this->render('crud_list.html.twig');
    }
}