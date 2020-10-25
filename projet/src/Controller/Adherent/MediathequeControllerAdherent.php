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
     * @Route("/adherent/bibliotheque/show/{genre}", name="adherent_bibliotheque_show_genre",methods={"GET"}, requirements={"genre"=".+"})
     */
    public function showBibliothequeByType(string $genre = null,Request $request, PaginatorInterface $paginator)
    {
        //$revue = $this->getDoctrine()->getRepository(Genre::class)->findBy(['libelleGenre' => 'REVUE']);
        //$livreRevue = $repository -> findBy(["fkIdGenre" => $revue]);
        //return $this->render('adherent/showBibliotheque.html.twig', ['livres' => $livreRevue, 'limit' => $limite]);

        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $genreLivre = $this->getDoctrine()->getRepository(Genre::class)->findBy(['libelleGenre' => $genre]);
        $articles = $repository -> findBy(["fkIdGenre" => $genreLivre]);

        $livres = $paginator ->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('adherent/showBibliotheque.html.twig', ['livres' => $livres]);
    }
}
