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
        $articleGoogle = $this->getGoogleIsbn($isbn,$serializer); // récupère les infos de google
        $articleEbay = $this->getEbayIsbn($isbn,$serializer); // récupère les infos de ebay
        $articleOl = $this->getOlIsbn($isbn,$serializer); // recupère les infos de Open Library
        $articleSurf = $this->getSurfIsbn($isbn,$serializer); // recupère les infos de bibliosurf
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

        $xml_string = file_get_contents("https://www.goodreads.com/book/isbn/9782840554684?format=xml&key=GawUBNIKswjA2y2MmSA");
        $xml = simplexml_load_string($xml_string);
        dd($xml);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        dd($array);


        $response = file_get_contents('https://www.goodreads.com/book/isbn/9782840554684?format=json');
        dd($response);

            $articleSurf = $serializer->decode($response,'json');
            dd($articleSurf);
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
                            $articleSurf['image'] ?? array_shift($articleEbay['galleryURL']) ?? '';
        // $infos['image'] = $this->getImages($articleGoogle,$articleEbay,$articleOl,$articleOl);
        if(is_array($infos['titre'])){
            $infos['titre'] = array_shift($infos['titre']);
        }

        return $infos;
    }
    public function getImages($articleGoogle,$articleEbay,$articleOl,$articleSurf){
        $images = array();
        if (!empty($articleGoogle['imageLinks']) && !empty($articleGoogle['imageLinks']['thumbnail'])) {
            array_push($images,$articleGoogle['imageLinks']['thumbnail']);
        }
        if(!empty($articleOl['cover'])){
            if(!empty($articleOl['cover']['large'])) array_push($images,$articleOl['cover']['large']);
            if(!empty($articleOl['cover']['medium'])) array_push($images,$articleOl['cover']['medium']);
            if(!empty($articleOl['cover']['small'])) array_push($images,$articleOl['cover']['small']);
        }
        if(!empty($articleSurf['image'])) array_push($images,$articleSurf['image']);
        if(!empty($articleEbay['galleryURL'])) array_push($images,$articleEbay['galleryURL']);
        return $images;
    }
}