<?php

namespace App\Controller\Articles;

use App\Entity\Bibliotheque;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class LivresController extends AbstractController
{
    /**
     * @Route("/livres/show", name="livres_show",methods={"GET"})
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function showAll(Request $request, PaginatorInterface $paginator)
    {
        $repository = $this->getDoctrine()->getRepository(Bibliotheque::class);
        $articles = $repository ->findAll();

        $livres = $paginator ->paginate(
            $articles,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('livres/show_all_livres.html.twig', ['livres' => $livres]);
    }


    /**
     * @Route("/livres/add", name="livres_add", methods={"GET","POST"})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function addLivre(){
        return $this->render('livres/add_livre.html.twig');
    }

    /**
     * @Route("/livres/add/{isbn}", name="livres_add_isbn", methods={"GET","POST"})
     * @param $isbn
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getDataFromIsbn($isbn,Request $request,SerializerInterface $serializer){

        $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn);
        $livre = $serializer->decode($response,'json');
        if($livre["totalItems"] > 0){
            $livre = $livre["items"][0]["volumeInfo"];
            $infos['titre'] = $livre['title'];
            if(empty($livre['subtitle'])){
                $infos['sous_titre'] = "";
            } else{
                $infos['sous_titre'] = $livre['subtitle'];
            }
            if(empty($livre["authors"])){
                $infos['auteur'] = "Auteur Inconnu";
            }else{
                $infos['auteur'] = $livre["authors"][0];
            }
            if(empty($livre['publisher'])){
                $infos['editeur']  = "Editeur Inconnu";
            }else{
                $infos['editeur'] = $livre['publisher'];
            }
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
