<?php

namespace App\Controller\Articles;

use App\Entity\Bibliotheque;
use App\Form\BibliothequeType;
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
     * @Route("/livres/getISBN", name="get_ISBN", methods={"GET","POST"})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getISBN(){
        return $this->render('livres/get_ISBN.html.twig');
    }

    /**
     * @Route("/livres/get/{isbn}", name="livres_search_isbn", methods={"GET","POST"})
     * @param $isbn
     * @param SerializerInterface $serializer
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getDataFromIsbn($isbn,SerializerInterface $serializer){

        if(strlen($isbn) < 10) return $this->json('faux',400);

        $articleGoogle = $this->getGoogleIsbn($isbn,$serializer);
        $articleEbay = $this->getEbayIsbn($isbn,$serializer);
        $articleOl = $this->getOlIsbn($isbn,$serializer);
        $articleSurf = $this->getSurfIsbn($isbn,$serializer);
        return $this->json($this->verifyResponseIsbn($articleGoogle,$articleEbay,$articleOl,$articleSurf),200, []);
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
        return $articleEbay['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'][0] ?? null;
    }

    public function getSurfIsbn($isbn,$serializer){
        // bibliosurf
        $response = file_get_contents('https://www.bibliosurf.com/?page=api_isbn&isbn='.$isbn);
        if($response != " \n"){
            $articleSurf = $serializer->decode($response,'json');
            return $articleSurf ?? null;
        }
        return null;
    }
    public function getOlIsbn($isbn,$serializer){
        // Open Library
        $response = file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:'.$isbn.'&jscmd=data&format=json');
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
        $infos['image'] = $articleGoogle['imageLinks']['thumbnail'] ??
            $articleOl['cover']['large'] ?? $articleOl['cover']['medium'] ?? $articleOl['cover']['small']??
             $articleSurf['image'] ?? $articleEbay['galleryURL'] ?? '';
        return $infos;
    }

    /**
     * @Route("/livres/add", name="add_livre", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function addLivre(){

        $article = new Bibliotheque();
        if(!empty($_POST)){
            $data = $_POST;
            $article->setTitreDesignation($data['titre']);
            $article->setPhoto($data['image']);
        }
        $form = $this->createForm(BibliothequeType::class,$article);

        return $this->render('livres/add.html.twig',[
            'form' => $form->createView(),
            'data' => $data ?? null
        ]);
    }
}
