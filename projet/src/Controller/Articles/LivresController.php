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

        if(strlen($isbn) < 10) return $this->json('faux',400);

        $articleGoogle = $this->getGoogleIsbn($isbn,$serializer);
        $articleEbay = $this->getEbayIsbn($isbn,$serializer);
        return $this->json($this->verifyResponseIsbn($articleGoogle,$articleEbay),200, []);
    }
    public function getGoogleIsbn($isbn,$serializer){
        $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn);
        $article = $serializer->decode($response,'json');
        return $articleGoogle = $article["items"][0]["volumeInfo"] ?? null;
    }
    public function getEbayIsbn($isbn,$serializer){
        $firstEbay = 'https://svcs.ebay.com/services/search/FindingService/v1?SECURITY-APPNAME=ArthurDu-proktila-PRD-47ccf9c51-93b76bcb&OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=JSON&REST-PAYLOAD&keywords=';
        $lastEbay = '&paginationInput.entriesPerPage=6&GLOBAL-ID=EBAY-FR&siteid=71&Content-Type=application/json';
        $response = file_get_contents($firstEbay.$isbn.$lastEbay);
        $articleEbay = $serializer->decode($response,'json');
        return $articleEbay['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'][0];
    }

    public function verifyResponseIsbn($articleGoogle,$articleEbay){
        $infos['titre'] = $articleGoogle['title'] ?? $articleEbay['title'] ?? '';
        $infos['sous_titre'] = $articleGoogle['subtitle'] ?? '';
        $infos['auteur'] = $articleGoogle["authors"][0] ?? '';
        $infos['editeur'] = $articleGoogle['publisher'] ?? '';
        $infos['dateDePublication'] = $articleGoogle['publishedDate'] ?? '';
        $infos['description'] = $articleGoogle['description'] ?? '';
        $infos['isbn'] = $articleGoogle['industryIdentifiers'][0]["identifier"] ?? '';
        $infos['image'] = $articleGoogle['imageLinks']['thumbnail'] ?? $articleEbay['galleryURL'] ?? '';
        return $infos;
    }
}
