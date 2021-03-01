<?php

namespace App\Controller;

use App\Repository\EnregistrementRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
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
    public function empruntActif(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findActif();
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
    public function empruntGestionActif(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findActif();
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
    public function empruntGestionHistorique(EnregistrementRepository $enregistrementRepository,PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy([],['dateEnregistrement'=>'DESC']);
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

    /**
     * @Route("/commande/gestion/achat", name="gestion_commande")
     */
    public function commandeGestion(EnregistrementRepository $enregistrementRepository,StatutEnregistrementRepository $statutEnregistrementRepository,PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['statutEnregistrement'=>$statutEnregistrementRepository->findOneBy(['libelle'=>'ache
        te'])]);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/commandes.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts)
        ]);
    }

    /**
     * @Route("/emprunts/{id}/statut/pret", name="changer_statut_pret")
     */
    public function empruntChangerPret(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'pret']));
        $date = new \DateTime('now');
        $emprunts->setDatePreparationFini($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_achat"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendu']));
        }

        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/emprunte", name="changer_statut_emprunte")
     */
    public function empruntChangerEmprunt(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'emprunte']));
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_emprunt"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'emprunte']));
        }
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/achete", name="changer_statut_achete")
     */
    public function empruntChangerAchete(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'achete']));
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_achat"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendu']));
        }

        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/rendu", name="changer_statut_rendu")
     */
    public function empruntChangerRendu(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'rendu']));
        $date = new \DateTime('now');
        $emprunts->setDateRendu($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "emprunte") {
            $article->setStatut($statutRepository->findOneBy(['libelle' => 'empruntable']));
        }
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('gestion_actif_emprunts');
    }
    /**
     * @Route("/emprunts/{id}/statut/perdu", name="changer_statut_perdu")
     */
    public function empruntChangerPerdu(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'perdu']));
        $date = new \DateTime('now');
        $emprunts->setDateRendu($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "emprunte") {
            $article->setStatut($statutRepository->findOneBy(['libelle' => 'perdu']));
        }
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('gestion_actif_emprunts');
    }
}