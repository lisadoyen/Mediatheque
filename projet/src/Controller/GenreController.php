<?php

namespace App\Controller;


use App\Data\SearchData;
use App\Entity\Bibliotheque;
use App\Entity\Genre;
use App\Repository\BibliothequeRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    public function getAllGenres()
    {
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        return $this->render('genres/_genre_submenu.html.twig', ['genres' => $genres]);
    }
}
