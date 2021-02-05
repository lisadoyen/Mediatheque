<?php

namespace App\Controller;

use App\Repository\EnregistrementRepository;
use App\Repository\StatutEnregistrementRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmpruntController extends AbstractController
{
    /**
     * @Route("/emprunts/historique", name="emprunts_historique")
     */
    public function empruntHistorique(EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository $statutEnregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['utilisateur'=>$this->getUser(), 'statutEnregistrement'=>$statutEnregistrementRepository->findAll()],['dateRendu'=>'DESC']);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/emprunts_client.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'historique'
        ]);
    }

    /**
     * @Route("/emprunts/actif", name="emprunts_actif")
     */
    public function empruntActif(EnregistrementRepository $enregistrementRepository,StatutEnregistrementRepository $statutEnregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['utilisateur'=>$this->getUser(), 'statutEnregistrement'=>$statutEnregistrementRepository->findActif()],['dateEnregistrement'=>'DESC','dateRenduTheorique'=>'DESC']);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/emprunts_client.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'en cours'
        ]);
    }

    /**
     * @Route("/emprunts/gestion/actif", name="gestion_actif_emprunts")
     */
    public function empruntGestionActif(EnregistrementRepository $enregistrementRepository,StatutEnregistrementRepository $statutEnregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['statutEnregistrement'=>$statutEnregistrementRepository->findActif()],['dateRendu'=>'DESC']);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_emprunts.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'en cours'
        ]);
    }

    /**
     * @Route("/emprunts/gestion/historique", name="gestion_historique_emprunts")
     */
    public function empruntGestionHistorique(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findAll();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_emprunts.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'historique'
        ]);
    }
}
