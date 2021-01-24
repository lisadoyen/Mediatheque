<?php


namespace App\Controller\Api;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/api/livre")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class LivreApiController extends AbstractController
{
    /**
     * @Route("/search/{isbn}", name="api_livre_search_isbn", methods={"GET","POST"})
     * @param $isbn
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function getDataFromIsbn($isbn,SerializerInterface $serializer){
        $articleGoogle = $this->getGoogleIsbn($isbn,$serializer);
        $articleEbay = $this->getEbayIsbn($isbn,$serializer);
        $articleOl = $this->getOlIsbn($isbn,$serializer);
        $articleSurf = $this->getSurfIsbn($isbn,$serializer);
        dd($this->verifyResponseIsbn($articleGoogle,$articleEbay,$articleOl,$articleSurf));
        //return $this->json($this->verifyResponseIsbn($articleGoogle,$articleEbay,$articleOl,$articleSurf),200, []);
    }
    public function getGoogleIsbn($isbn,$serializer){
        $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $isbn) ?? null;
        if($response == null) return null;
        $article = $serializer->decode($response,'json');
        return $articleGoogle = $article["items"][0]["volumeInfo"] ?? null;
    }
    public function getEbayIsbn($isbn,$serializer){
        $firstEbay = 'https://svcs.ebay.com/services/search/FindingService/v1?SECURITY-APPNAME=ArthurDu-proktila-PRD-47ccf9c51-93b76bcb&OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=JSON&REST-PAYLOAD&keywords=';
        $lastEbay = '&paginationInput.entriesPerPage=6&GLOBAL-ID=EBAY-FR&siteid=71&Content-Type=application/json';
        $response = file_get_contents($firstEbay.$isbn.$lastEbay) ?? null;
        if($response == null) return null;
        $articleEbay = $serializer->decode($response,'json');
        return $articleEbay['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'][0] ?? null;
    }

    public function getSurfIsbn($isbn,$serializer){
        // bibliosurf
        $response = file_get_contents('https://www.bibliosurf.com/?page=api_isbn&isbn='.$isbn) ?? null;
        if($response == null) return null;
        if($response != " \n"){
            $articleSurf = $serializer->decode($response,'json');
            return $articleSurf ?? null;
        }
        return null;
    }
    public function getOlIsbn($isbn,$serializer){
        // Open Library
        $response = file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:'.$isbn.'&jscmd=data&format=json') ?? null;
        $article = $serializer->decode($response,'json');
        $articleOl = array_shift($article) ?? null;
        return $articleOl;
    }

    public function verifyResponseIsbn($articleGoogle,$articleEbay,$articleOl,$articleSurf){
        $infos['titre'] = $articleGoogle['title'] ?? $articleOl['title'] ?? $articleSurf['name'] ?? $articleEbay['title'] ??'';
        $infos['sous_titre'] = $articleGoogle['subtitle'] ?? '';
        $infos['auteur'] = $articleGoogle["authors"][0] ?? $articleOl['authors'][0]['name'] ?? $articleSurf['author']['name'] ?? '';
        $infos['editeur'] = $articleGoogle['publisher'] ?? $articleOl['publishers'][0]['name'] ?? '';
        $infos['dateDePublication'] = $articleGoogle['publishedDate'] ?? $articleOl['publish_date'] ??'';
        $infos['description'] = $articleGoogle['description'] ?? '';
        $infos['isbn'] = $articleGoogle['industryIdentifiers'][0]["identifier"] ?? $articleOl['identifiers']['isbn_13'] ?? '';
        $infos['image'] =   $articleGoogle['imageLinks']['thumbnail'] ??
                            $articleOl['cover']['large'] ?? $articleOl['cover']['medium'] ?? $articleOl['cover']['small']??
                            $articleSurf['image'] ?? $articleEbay['galleryURL'] ?? '';
        return $infos;
    }
}