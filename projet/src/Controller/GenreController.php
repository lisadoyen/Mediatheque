<?php

namespace App\Controller;


use App\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    /**
     * @Route("/livres/genres", name="livres_genres",methods={"GET"})
     */
    public function showGenre()
    {
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        return $this->render('genre/index.html.twig', ['genres' => $genres]);
    }
}
