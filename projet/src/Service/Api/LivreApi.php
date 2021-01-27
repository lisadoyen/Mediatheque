<?php
namespace App\Service\Api;

use App\Repository\ActionRepository;
use App\Repository\CategorieRepository;
use DateTime;
use SimpleXMLElement;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use function Sodium\add;

class LivreApi
{
    private $serializer;
    private $isbn;
    private $infosGoogle;
    private $infosEbay;
    private $infosGoodRead;
    private $infosOpenLibrary;

    public function __construct(SerializerInterface $serializer){
        $this->serializer = $serializer;
    }


    /**
     * récupère des données
     * @param $isbn -isbn du livre
     */
    public function getDataFromIsbn($isbn){
        $this->isbn = $isbn;
        $this->getGoogleIsbn(); // récupère les infos de google
        $this->getEbayIsbn($this->isbn); // récupère les infos de ebay
        $this->getOlIsbn(); // recupère les infos de Open Library
        $this->getGoodReadIsbn(); // recupère les infos de goodReads
        $this->verifyResponseIsbn();
        //return $this->json($this->verifyResponseIsbn($articleGoogle,$articleEbay,$this->infosOpenLibrary,$articleSurf),200, []);
    }

    /**
     * récupure les infos de google
     */
    private function getGoogleIsbn(){
        $response = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $this->isbn) ?? null;
        $article = $this->serializer->decode($response,'json');
        $this->infosGoogle = $article["items"][0]["volumeInfo"] ?? null;
    }

    /**
     * récupère les infos de ebay
     */
    public function getEbayIsbn($key){
        // url
        $firstEbay = 'https://svcs.ebay.com/services/search/FindingService/v1?SECURITY-APPNAME=ArthurDu-proktila-PRD-47ccf9c51-93b76bcb&OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=JSON&REST-PAYLOAD&keywords=';
        // fin url
        $lastEbay = '&paginationInput.entriesPerPage=6&GLOBAL-ID=EBAY-FR&siteid=71&Content-Type=application/json';
        $response = file_get_contents($firstEbay.$this->isbn.$lastEbay) ?? null;
        // transforme en tableau php
        $articleEbay = $this->serializer->decode($response,'json');
        // récupère le 1er élément
        $this->infosEbay = $articleEbay['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'][0] ?? null;
    }

    /**
     * récupère les infos xml de good read et les convertit en tablea
     */
    private function getGoodReadIsbn(){

        // récupère le xml
        $response = file_get_contents("https://www.goodreads.com/book/isbn/".$this->isbn."?format=xml&key=GawUBNIKswjA2y2MmSA");
        // crée un élément php xml
        $xml = new SimpleXMLElement($response);
        // prend uniquement le contenu "book" du xml
        $xml = $xml->book;
        // transforme le xml en json puis en tableau php
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        // remplie un tableau avec le melange du json et du xml
        $infos['titre'] = $xml->title->__toString() ?? null;
        $infos['description'] = $xml->description->__toString() ?? null;
        $infos['auteurs'] = $this->getAuteursGoodRead(json_decode(json_encode($xml->authors)));
        $infos['image'] = $array['image_url'] ?? $array['small_image_url'] ?? null;
        $infos['publication'] = $this->getDateGoodRead($array['publication_year'],$array['publication_month'],$array['publication_day']);
        $infos['editeur'] = $array['publisher'];

        $this->infosGoodRead = $infos ?? null;
    }

    /**
     * Crée une date en fonction des éléments fournit ou renvoie null
     * @param $year -année
     * @param $month -mois
     * @param $day -jour
     * @return DateTime|null Date de publication
     */
    private function getDateGoodRead($year, $month, $day): ?DateTime
    {
        // si l'année est vide renvoi null
        if(empty($year)) return null;
        // si il y a 1 année et 1 mois et 1 jour
        else if (!empty($month) && !empty($day)){
            try {
                // crée date année-mois-jour
                return new DateTime($year . "-" . $month . "-" . $day);
            } catch (\Exception $e) {
                return null;
            }
        // sinon si il n'y a pas de jour mais quand même année et mois
        }else if(!empty($month)){
            try {
                // crée date année-mois-01
                return new DateTime($year . "-" . $month . "-01");
            } catch (\Exception $e) {
                return null;
            }
        }
        // il n'y a qu'une année
        try {
            // crée date année-01-01
            return new DateTime($year . "-01-01");
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * simplifie les auteurs en créant un tableau et en les incluants dedans
     * @param $auteurs -auteurs  en format json
     * @return mixed|null listeAuteurs/ 1 auteur / null
     */
    private function getAuteursGoodRead($auteurs){
        // vérifie si le xml contient des données
        if(empty($auteurs)) return null;
        $allAuteurs = [];
        // boucle sur les données envoyées
        foreach ($auteurs as $auteur){
            array_push($allAuteurs,$auteur);
        }
        // renvoie le 1 élement du tableau contenant tout les auteurs
        return array_shift($allAuteurs);
    }

    /**
     * récupère les infos de open Library
     */
    private function getOlIsbn(){
        $response = @file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:'.$this->isbn.'&jscmd=data&format=json') ?? null;
        if (isset($this->serializer)) {
            // transforme les données en tableau
            $article = $this->serializer->decode($response,'json');
        }
        $this->infosOpenLibrary = array_shift($article) ?? null;
    }

    private function verifyResponseIsbn(){
        $infos['titres'] = [];
        array_push($infos['titres'],$this->infosGoogle['title'] ?? '');
        array_push($infos['titres'],$this->infosGoodRead['titre'] ?? '');
        array_push($infos['titres'],$this->infosOpenLibrary['title'] ?? '');
        array_push($infos['titres'],$this->infosEbay['title'][0] ?? '');

        $infos['auteurs'] = [];
        array_push($infos['auteurs'],$this->infosGoogle["authors"] ?? '');
        array_push($infos['auteurs'],$this->infosGoodRead['auteurs'] ?? '');
        array_push($infos['auteurs'],$this->infosOpenLibrary['authors'] ?? '');

        $infos['editeurs'] = [];
        array_push($infos['editeurs'],$this->infosGoogle['publisher'] ?? '');
        array_push($infos['editeurs'],$this->infosGoodRead['editeur'] ?? '');
        array_push($infos['editeurs'],$this->infosOpenLibrary['publishers'][0]['name'] ?? '');

        $infos['publication'] = [];
        array_push($infos['publication'], $this->infosGoogle['publishedDate'] ?? '');
        array_push($infos['publication'], $this->infosGoodRead['publication'] ?? '');
        array_push($infos['publication'], $this->infosOpenLibrary['publish_date'] ?? '');

        $infos['description'] = [];
        array_push($infos['description'],$this->infosGoogle['description'] ?? '');
        array_push($infos['description'],$this->infosGoodRead['description'] ?? '');

        dd($infos);

        $infos['image'] =   $this->infosGoogle['imageLinks']['thumbnail'] ??
            $this->infosOpenLibrary['cover']['large'] ?? $this->infosOpenLibrary['cover']['medium'] ?? $this->infosOpenLibrary['cover']['small']??
            $this->infosGoodRead['image'] ?? array_shift($this->infosEbay['galleryURL']) ?? '';
        // $infos['image'] = $this->getImages($this->infosGoogle,$articleEbay,$this->infosOpenLibrary,$this->infosOpenLibrary);
        if(is_array($infos['titre'])){
            $infos['titre'] = array_shift($infos['titre']);
        }

        return $infos;
    }
    private function getImages(){
        $images = array();
        if (!empty($this->infosGoogle['imageLinks']) && !empty($this->infosGoogle['imageLinks']['thumbnail'])) {
            array_push($images,$this->infosGoogle['imageLinks']['thumbnail']);
        }
        if(!empty($this->infosOpenLibrary['cover'])){
            if(!empty($this->infosOpenLibrary['cover']['large'])) array_push($images,$this->infosOpenLibrary['cover']['large']);
            if(!empty($this->infosOpenLibrary['cover']['medium'])) array_push($images,$this->infosOpenLibrary['cover']['medium']);
            if(!empty($this->infosOpenLibrary['cover']['small'])) array_push($images,$this->infosOpenLibrary['cover']['small']);
        }
        if(!empty($articleSurf['image'])) array_push($images,$articleSurf['image']);
        if(!empty($articleEbay['galleryURL'])) array_push($images,$articleEbay['galleryURL']);
        return $images;
    }


}