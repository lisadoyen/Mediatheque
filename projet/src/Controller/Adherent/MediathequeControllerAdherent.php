<?php

namespace App\Controller\Adherent;
use App\Entity\Bibliotheque;
use App\Entity\Genre;
use Knp\Component\Pager\PaginatorInterface;
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
     * @Route("/adherent/bibliotheque/show", name="adherent_bibliotheque_show",methods={"GET"})
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function showBibliotheque(Request $request, PaginatorInterface $paginator)
    {
        //$limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $articles = $repository ->findAll();

        $livres = $paginator ->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('adherent/showBibliotheque.html.twig', ['livres' => $livres]);

    }

    /**
     * @Route("/adherent/bibliotheque/show/genre/{id}", name="adherent_bibliotheque_show_genre",methods={"GET"})
     */
    public function showBibliothequeByType(Request $request, PaginatorInterface $paginator, $id)
    {
        $articles = $this->getDoctrine()->getRepository(Bibliotheque::class)->findBy(["fkIdGenre" => $id]);
        $genre = $this->getDoctrine()->getRepository(Genre::class)->find($id);
        $livres = $paginator ->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('adherent/showBibliotheque.html.twig', ['livres' => $livres, 'genre' => $genre]);
    }
}
