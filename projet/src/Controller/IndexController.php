<?php

namespace App\Controller;

use App\Controller\Articles\ArticleController;
use App\Entity\Article;
use App\Repository\ActionRepository;
use App\Repository\AnnonceRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
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
     * @return Response
     */
    public function accueil(AnnonceRepository $ar, CategorieRepository $categorieRepo,ActionRepository $actionsRepo, ArticleRepository $articleRepo)
    {

        return $this->render('accueil.html.twig', [
            'annonces' => $ar->findAll(),
            'nouveaute' => $nouveaute = $this->findArticleNouveaute($categorieRepo, $actionsRepo),
            'articles' => $articleRepo ->findAll()
        ]);
    }

    /**
     * fonctions qui permet de déterminer si un article est nouveau ou non
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @return int|mixed|string
     */
    function findArticleNouveaute(CategorieRepository $categorieRepo,ActionRepository $actionsRepo){

        $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
        $today = $dateTodayConvert->format('Y-m-d');

        $categorie = $categorieRepo->findAll(); // selection de toutes les catégories
        $nbJourNouveaute = null; // variable pour la durée de la nouveauté
        foreach ($categorie as $cat){
            $nbJourNouveaute = $cat->getDureeNouveaute(); // récupération nb nouveauté
        }
        $dateDureeMax = $this->transformDate($today, 812); // TODO 812 pour test => mettre nbJourNouveaute normalement
        $nouveaute = $actionsRepo->findIsNouveaute($dateDureeMax);

        return $nouveaute;
    }

    function transformDate($date,$nombre_jour) {

        $year = (int)substr($date, 0, 4);
        $month = (int)substr($date, 5, 2);
        $day = (int)substr($date, 8, 2);

        // récupère la date du jour
        $date_string = mktime(0,0,0,$month,$day,$year);

        // Supprime les jours
        $timestamp = $date_string - ($nombre_jour * 86400);
        $nouvelle_date = date("d/m/Y", $timestamp);

        // pour afficher
        return $nouvelle_date;

    }

    /**
     * @Route("/crud_list", name="crud_list")
     */
    public function crudlist() {
        return $this->render('crud_list.html.twig');
    }
}