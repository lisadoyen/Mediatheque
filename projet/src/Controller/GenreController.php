<?php

namespace App\Controller;


use App\Entity\Bibliotheque;
use App\Entity\Genre;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    /**
     * @Route("/genres/livres", name="genres_livres_show",methods={"GET"})
     */
    public function showAllGenre()
    {
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        return $this->render('genres/show_genres_livres.html.twig', ['genres' => $genres]);
    }

    /**
     * @Route("/genres/{id}/livres", name="genres_id_livres_show",methods={"GET"})
     */
    public function showOneByGenre(Request $request, PaginatorInterface $paginator, $id)
    {
        $articles = $this->getDoctrine()->getRepository(Bibliotheque::class)->findBy(["fkIdGenre" => $id]);
        $genre = $this->getDoctrine()->getRepository(Genre::class)->find($id);
        $livres = $paginator ->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('livres/show_byGenre_livres.html.twig', ['livres' => $livres, 'genre' => $genre]);
    }
}
