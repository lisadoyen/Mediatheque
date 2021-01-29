<?php
namespace App\Service\Article;

use App\Data\SearchData;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GenreRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class Filtre
{

    function filtreAvecCategorie_Genre($idGenre, $idCategorie,  $bool, GenreRepository $genreRepository,
                           CategorieRepository $categorieRepo, SessionInterface $session, ArticleRepository $ar) {

        $data = new SearchData();
        $genres = [];
        if($idGenre != null) {
            $genres[$idGenre] = $genreRepository->find($idGenre);
            $data->genre = $genres;
            $donnees['genres'] = $genres;
        }
        $categories = [];
        if($idCategorie != null) {
            $categories[$idCategorie] = $categorieRepo->find($idCategorie);
            $data->categorie = $categories;
            $donnees['categories'] = $categories;
        }
        $session->set('donnees', null);
        $session->set('donnees', $donnees);
        if (!empty($donnees)) {
            $donnees = $session->get('donnees');
            if($idGenre != null) $data->genre = $donnees['genres'];
            if($idCategorie != null) $data->categorie = $donnees['categories'];
        }
        if($bool == true)
            return $ar->findSearch($data);
        else
            return $donnees;
    }

    function filtre(Request $request, $bool, GenreRepository $genreRepository,
                    CategorieRepository $categorieRepo, SessionInterface $session, ArticleRepository $ar){
        $data = new SearchData();
        if ($request->getMethod() == 'POST') {
            if(isset($_POST['search'])) {
                $donnees['search'] = $_POST['search'];
                $data->q = $donnees['search'];
            }
            if(!empty($_POST['genres'])){
                $donnees['genres'] = $_POST['genres'];
                $genres = [];
                foreach ($donnees['genres'] as $id) {
                    $genres[$id] = $genreRepository->find($id);
                    $data->genre = $genres;
                    $donnees['genres'] = $genres;
                }
            }
            if(!empty($_POST['categories'])) {
                $donnees['categories'] = $_POST['categories'];
                $categories = [];
                foreach ($donnees['categories'] as $id) {
                    $categories[$id] = $categorieRepo->find($id);
                    $data->categorie = $categories;
                    $donnees['categories'] = $categories;
                }
            }
            if(isset($donnees))
                $session->set('donnees', $donnees);
            else
                $donnees=null;
        } else {
            // on remplie le filtre avec la session
            $donnees = $session->get('donnees');
            if (!empty($donnees)) {
                if(isset($donnees['search']))
                    $data->q = $donnees['search'];
                if (!empty($donnees['genres'])) {
                    $data->genre = $donnees['genres'];
                }
                if (!empty($donnees['categories'])) {
                    $data->categorie = $donnees['categories'];
                }
            }
        }
        if($bool == true)
            return $ar->findSearch($data);
        else
            return $donnees;
    }

}