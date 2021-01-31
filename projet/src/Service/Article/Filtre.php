<?php
namespace App\Service\Article;

use App\Data\SearchData;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GenreRepository;
use App\Repository\StatutRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class Filtre
{

    function filtreAvecCategorie_Genre($idGenre, $idCategorie,  $bool, GenreRepository $genreRepository, StatutRepository $statutRepository,
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
        $statuts = $statutRepository->findAll();
        $data->statut = $statuts;
        $donnees['statuts'] = $statuts;
        $donnees['min'] = null;
        $donnees['max'] = null;
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

    function filtre(Request $request, $bool, $prixMin, $prixMax, GenreRepository $genreRepository,
                    CategorieRepository $categorieRepo, SessionInterface $session,
                    ArticleRepository $ar, StatutRepository $statutRepository){
        $data = new SearchData();
        if ($request->getMethod() == 'POST') {
            if(isset($_POST['search'])) {
                $donnees['search'] = $_POST['search'];
                $data->q = $donnees['search'];
            }
            $donnees['min']=$_POST['min'];
            $donnees['max']=$_POST['max'];
            $erreurs = $this->validatorArticle($donnees);

            if(!empty($_POST['genres'])){
                $donnees['genres'] = $_POST['genres'];
                $genres = [];
                foreach ($donnees['genres'] as $id) {
                    $genres[$id] = $genreRepository->find($id);
                    $data->genre = $genres;
                    $donnees['genres'] = $genres;
                }
            }
            if(!empty($_POST['nouveaute'])){
                $donnees['nouveaute'] = $_POST['nouveaute'];
                $data->nouveaute = true;
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
            if(!empty($_POST['statuts'])) {
                $donnees['statuts'] = $_POST['statuts'];
                $statuts = [];
                foreach ($donnees['statuts'] as $id) {
                    $statuts[$id] = $statutRepository->find($id);
                    $data->statut = $statuts;
                    $donnees['statuts'] = $statuts;
                }
            }
            if(empty($erreurs)) {
                $data->max = $_POST['max'];
                $data->min = $_POST['min'];
            }else{
                // afficher la page avec erreur à faire
                dd('test');
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
                if (!empty($donnees['statuts'])) {
                    $data->statut = $donnees['statuts'];
                }
                if(!empty($donnees['nouveaute'])){
                    $data->nouveaute = true;
                }
                if (!empty($donnees['max'])) { $data->max = $donnees['max'];}
                if (!empty($donnees['min'])) $data->min = $donnees['min'];
            }
        }
        [$min, $max] = $ar->findMinMax($data);
        if($prixMin == true){
            return $min;
        }
        if($prixMax == true){
            return $max;
        }
        if($bool == true)
            return $ar->findSearch($data);
        else
            return $donnees;
    }

    public function validatorArticle($donnees)
    {
        $erreurs = array();
        if(!is_numeric($donnees['min']) && $donnees['min'] != "") $erreurs['min'] = 'saisir une valeur numérique';
        if(!is_numeric($donnees['max']) && $donnees['max'] != "") $erreurs['max'] = 'saisir une valeur numérique';
        return $erreurs;
    }

}