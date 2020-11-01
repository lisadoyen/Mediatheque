<?php

namespace App\Controller\Benevole;
use App\Entity\Bibliotheque;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @IsGranted("ROLE_BENEVOLE")
 */
class MediathequeControllerBenevole extends AbstractController
{
    /**
    * @Route("/benevole", name="benevole_accueil",methods={"GET"})
    */
    public function accueilIndex()
    {
        return $this->render('benevole/accueil.html.twig');
    }

    /**
    * @Route("/benevole/bibliotheque/show", name="benevole_bibliotheque_show",methods={"GET"})
    */
    public function showBibliotheque()
    {
        $limite = 10; // faire en sorte de le relier au input
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $livres = $repository ->findAll();
        return $this->render('benevole/showBibliotheque.html.twig', ['livres' => $livres, 'limit' => $limite]);
    }

    /**
     * @Route("/benevole/bibliotheque/addLivre", name="benevole_bibliotheque_addLivre", methods={"GET","POST"})
     * @return Response
     */
    public function addLivre(){
        return $this->render('benevole/addLivre.html.twig');
    }

    /**
     * @Route("/benevole/bibliotheque/addLivre/{isbn}", name="benevole_bibliotheque_addLivre_isbn", methods={"GET","POST"})
     * @param $isbn
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function getDataFromIsbn($isbn,Request $request,SerializerInterface $serializer){

            $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn);
            $livre = $serializer->decode($response,'json');
            if($livre["totalItems"] > 0){
                $livre = $livre["items"][0]["volumeInfo"];
                $infos['titre'] = $livre['title'];
                $infos['sous_titre'] = $livre['subtitle'];
                if(empty($livre["authors"])){
                    $infos['auteur'] = "Auteur Inconnu";
                }else{
                    $infos['auteur'] = $livre["authors"][0];
                }
                $infos['editeur'] = $livre['publisher'];
                $infos['dateDePublication'] = $livre['publishedDate'];
                $infos['description'] = $livre['description'];
                $infos['isbn'] = $livre['industryIdentifiers'][0]["identifier"];
                $infos['image'] = $livre['imageLinks']["thumbnail"];
                return $this->json($infos,200, []);
            }
            $errors['erreur'] = "livre introuvable";
            return $this->json($errors,400);
    }

}
