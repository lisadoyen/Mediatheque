<?php

namespace App\Controller;

use App\Repository\EnregistrementRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmpruntController extends AbstractController
{
    /**
     * @Route("/emprunts", name="emprunts")
     */
    public function emprunt(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['utilisateur'=>$this->getUser()]);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/emprunts_client.html.twig', [
            'emprunts' => $empruntsPages,'nbEmprunt' => count($emprunts)
        ]);
    }
    /**
     * @Route("/emprunts/gestion", name="gestion_emprunts")
     */
    public function empruntGestion(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findAll();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_emprunts.html.twig', [
            'emprunts' => $empruntsPages,'nbEmprunt' => count($emprunts)
        ]);
    }
}
