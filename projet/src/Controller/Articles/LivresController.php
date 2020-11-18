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
     * @param SerializerInterface $serializer
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getDataFromIsbn($isbn,SerializerInterface $serializer){

        $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn);
        $article = $serializer->decode($response,'json');
        if($article["totalItems"] > 0){
            return $this->json($this->verifyGoogleResponseIsbn($article["items"][0]["volumeInfo"]),200, []);
        }
        $errors['erreur'] = "livre introuvable";
        return $this->json($errors,400);
    }

    public function verifyGoogleResponseIsbn($article){
        $infos['titre'] = $article['title'] ?? '';
        $infos['sous_titre'] = $article['subtitle'] ?? '';
        $infos['auteur'] = $article["authors"][0] ?? '';
        $infos['editeur'] = $article['publisher'] ?? '';
        $infos['dateDePublication'] = $article['publishedDate'] ?? '';
        $infos['description'] = $article['description'] ?? '';
        $infos['isbn'] = $article['industryIdentifiers'][0]["identifier"] ?? '';
        $infos['image'] = $article['imageLinks']["thumbnail"] ?? '';
        return $infos;
    }
}
