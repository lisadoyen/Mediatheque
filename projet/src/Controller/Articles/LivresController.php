<?php

namespace App\Controller\Articles;

use App\Data\SearchData;
use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Bibliotheque;
use App\Entity\Enregistrement;
use App\Entity\Entite;
use App\Entity\Favoris;
use App\Entity\Genre;
use App\Entity\StatutEnregistrement;
use App\Entity\TypeEntite;
use App\Form\BibliothequeType;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\BibliothequeRepository;
use App\Repository\CategorieRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\EntiteRepository;
use App\Repository\FavorisRepository;
use App\Repository\GenreRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
use App\Repository\TrancheAgeRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEnregistrementRepository;
use App\Repository\TypeEntiteRepository;
use App\Repository\UserRepository;
use App\Repository\VideoldRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Date;

class LivresController extends AbstractController
{
    /**
     * @Route("/livres/show", name="livres_show", methods={"GET", "POST"})
     * @Route("/livres/genres/{id}/show", name="genres_id_livres_show", methods={"GET", "POST"})
     * @param null $id
     * @param SessionInterface $session
     * @param ArticleRepository $ar
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function showAll($id = null, SessionInterface $session, ArticleRepository $ar,
                            CategorieRepository $categorieRepo,
                            ActionRepository $actionsRepo,
                            Request $request, PaginatorInterface $paginator)
    {
        // Menu genre
        if($id != null) {
            $data = new SearchData();
            $categories = [];
            $categories[$id] = $this->getDoctrine()->getRepository(Genre::class)->find($id);
            $data->genre = $categories;
            $donnees['genres'] = $categories;
            $session->set('donnees', null);
            $session->set('donnees', $donnees);
            if (!empty($donnees)) {
                $donnees = $session->get('donnees');
                $data->genre = $donnees['genres'];
            }

            $articles = $ar->findSearch($data);
            $livres = $paginator ->paginate(
                $articles,
                $request->query->getInt('page',1),
                30
            );

            $nouveaute = $this-> findArticleNouveaute($categorieRepo, $actionsRepo);

            return $this->render('livres/show_all_livres.html.twig', [
                'livres' => $livres,
                'genres' => $this->getDoctrine()->getRepository(Genre::class)->findAll(),
                'donnees' => $donnees,
                'nouveaute' => $nouveaute
            ]);
        }
        // filtre
        else {
            $data = new SearchData();
            if ($request->getMethod() == 'POST') {

                $donnees['search'] = $_POST['search'];

                $data->q = $donnees['search'];
                if (!empty($_POST['genres'])) {
                    $donnees['genres'] = $_POST['genres'];
                    $categories = [];
                    foreach ($donnees['genres'] as $id) {
                        $categories[$id] = $this->getDoctrine()->getRepository(Genre::class)->find($id);
                    }
                    $data->genre = $categories;
                    $donnees['genres'] = $categories;
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
                }
            }
            $articles = $ar->findSearch($data);

            $livres = $paginator->paginate(
                $articles,
                $request->query->getInt('page', 1),
                30
            );

            $nouveaute = $this-> findArticleNouveaute($categorieRepo, $actionsRepo);

            return $this->render('livres/show_all_livres.html.twig', [
                'session' => $session,
                'livres' => $livres,
                'genres' => $this->getDoctrine()->getRepository(Genre::class)->findAll(),
                'donnees' => $donnees,
                'nouveaute' => $nouveaute
            ]);
        }
    }

    /** Fonction qui permet de transformer une date,
     * sert à calculer la date en fonction de la durée pour la nouveauté
     * @param $date
     * @param $nombre_jour
     * @return false|string
     */
    function transformDate($date,$nombre_jour) {

        $year = (int)substr($date, 0, 4);
        $month = (int)substr($date, 5, 2);
        $day = (int)substr($date, 8, 2);

        // récupère la date du jour
        $date_string = mktime(0,0,0,$month,$day,$year);

        // Supprime les jours
        $timestamp = $date_string - ($nombre_jour * 86400);
        $nouvelle_date = date("d/m/Y", $timestamp);

        // pour afficher
        return $nouvelle_date;

    }

    /**
     * fonctions qui permet de déterminer si un article est nouveau ou non
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @return int|mixed|string
     */
    function findArticleNouveaute(CategorieRepository $categorieRepo,ActionRepository $actionsRepo){

        $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
        $today = $dateTodayConvert->format('Y-m-d');

        $categorie = $categorieRepo->findAll(); // selection de toutes les catégories
        $nbJourNouveaute = null; // variable pour la durée de la nouveauté
        foreach ($categorie as $cat){
            $nbJourNouveaute = $cat->getDureeNouveaute(); // récupération nb nouveauté
        }
        $dateDureeMax = $this->transformDate($today, 812); // TODO 812 pour test => mettre nbJourNouveaute normalement
        $nouveaute = $actionsRepo->findIsNouveaute($dateDureeMax);

        return $nouveaute;
    }

    /**
     * @Route("/livre/filtre/clear", name="filter_clear", methods={"GET", "POST"})
     * @param SessionInterface $session
     * @return Response
     */
    public function clearFiltrer(SessionInterface $session){
        $session->set('donnees', null);
        return $this->redirectToRoute('livres_show');
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

    /**
     * @Route("/livres/{id}", name="livre_details")
     * @param ArticleRepository $articleRepository
     * @param FavorisRepository $favorisRepository
     * @param int $id
     * @return Response
     */
    public function livreDetails(ArticleRepository $articleRepository, FavorisRepository $favorisRepository, $id=1){
        $livre = $articleRepository->findOneBy(['id' => $id]);
        $fav = $favorisRepository->findOneBy(['utilisateur'=>$this->getUser(), 'article'=>$livre]);
        return $this->render('livres/show_livre_details.html.twig', [
            'livre' => $livre,
            'favoris' => $fav,
        ]);
    }

    /**
     * transfert bdd
     * @Route("/bdd/transfert", name="modifVideold", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     * @throws Exception
     */
    public function transfertBDD(VideoldRepository $videoldRepository,
                                 EntiteRepository $entiteRepository,
                                 CategorieRepository $categorieRepository,
                                 TrancheAgeRepository $trancheAgeRepository,
                                 StatutRepository $statutRepository,
                                 GenreRepository $genreRepository,
                                 UserRepository $userRepository,
                                 TypeActionRepository $typeActionRepository,
                                 TypeEnregistrementRepository $typeEnregistrementRepository,
                                 StatutEnregistrementRepository $statutEnregistrementRepository,
                                 EnregistrementRepository $enregistrementRepository,
                                 EntityManagerInterface $em,
                                 TypeEntiteRepository $typeEntiteRepository)
    {
        $admin = $userRepository->find(2);
        $typeEmprunt = $typeEnregistrementRepository->find(2);
        $videos = $videoldRepository->findAll();
        $typeAuteur = $typeEntiteRepository->find(1);
        $categorieVideo = $categorieRepository->find(2);
        $tranche = $trancheAgeRepository->find(1);
        $statutEmprunte = $statutEnregistrementRepository->find(5);
        $statutRendu = $statutEnregistrementRepository->find(7);
        $empruntable = $statutRepository->find(1);
        $vendable = $statutRepository->find(2);
        $emprunte = $statutRepository->find(6);
        $perdu = $statutRepository->find(3);
        $vendu = $statutRepository->find(5);

        $obtention = $typeActionRepository->find(1);
        $creation = $typeActionRepository->find(2);
        $modification = $typeActionRepository->find(3);

        $comedie = $genreRepository->find(1);

        $em->getConnection()->getConfiguration()->setSQLLogger(null);

        foreach ($videos as $video) {
            $nom = $video->getNomAuteur();
            $prenom = $video->getPrenomAuteur();
            if(!$entiteRepository->findBy(['nom' => $nom])){
                $auteur = new Entite();
                $auteur->setTypeEntite($typeAuteur);
                $auteur->setNom($nom);
                $auteur->setPrenom($prenom);
                $em->persist($auteur);
                $em->flush();
            }

            $article = new Article();
            $article->setCategorie($categorieVideo);
            $article->setTrancheAge($tranche);

            if($video->getCodeEtat() === 'AC'){
                $article->setStatut($empruntable);
                if($video->getSortie() === 'S'){
                    $article->setStatut($emprunte);
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement(new \DateTime());
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutEmprunte); // statut emprunte
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $date = new \DateTime();
                    $date->add(new \DateInterval('P'.$categorieVideo->getDureeEmpruntMax().'D'));
                    $enregistrement->setDateRenduTheorique($date);
                    $enregistrement->setNoCommande(1);
                    $em->persist($enregistrement);
                }
                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();
                for($i = 0; $i < $video->getNbSortie() ; $i++){
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement($date);
                    $enregistrement->setDateRenduTheorique( $dateRendu);
                    $enregistrement->setDateRendu($dateRendu);
                    $enregistrement->setDatePreparationFini($datePrepFini);
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutRendu); // statut rendu
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $enregistrement->setNoCommande(1);
                    $em->persist($enregistrement);
                }
            }else if ($video->getCodeEtat() === 'PERDU'){
                $article->setStatut($perdu);
            }else if ($video->getCodeEtat() === 'VENTE'){
                $article->setStatut($vendable);
            }else{
                $article->setStatut($vendu);
            }

            $action = new Action();
            $dateModif = $video->getDateCreation();
            if ($dateModif != NULL) $action->setDate($dateModif);
            else $action->setDate(new \DateTime());
            $action->setStaff($admin);
            $action->setTypeAction($creation);
            $article->addAction($action);
            $em->persist($action);

            $action = new Action();
            $dateModif = $video->getDateAchat();
            if ($dateModif != NULL) $action->setDate($dateModif);
            else $action->setDate(new \DateTime());
            $action->setStaff($admin);
            $action->setTypeAction($obtention);
            $article->addAction($action);
            $em->persist($action);

            $action = new Action();
            $dateModif = $video->getDateRetrait();
            if ($dateModif != NULL) {
                $action->setDate($dateModif);
                $action->setStaff($admin);
                $action->setTypeAction($modification);
                $article->addAction($action);
                $em->persist($action);
            }

            $article->setGenre($comedie);
            $article->setGencode($video->getGencode());
            $article->setCodeArticle($video->getCodeArticle());
            $article->setTitre($video->getTitre());
            $article->setMontantObtention($video->getPrixAchat());
            $article->setMontantCaution(5.30);
            $article->setMontantVente(5.40);
            $article->setNumerique(false);
            $em->persist($article);
            $em->flush();
        }

        return $this->redirectToRoute("index");
    }
    /**
     * transfert bdd
     * @Route("/bdd/transfert/entite", name="modifEntite", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function transfertEntite(VideoldRepository $videoldRepository,
                                 EntiteRepository $entiteRepository,
                                 EntityManagerInterface $em,
                                 ArticleRepository $articleRepository){


        foreach ($videoldRepository->findAll() as $video){
            $code = $video->getCodeArticle();
            $article = $articleRepository->findOneBy(['codeArticle' => $code]);
            $entite = $entiteRepository->findOneBy(['nom' => $video->getNomAuteur()]);
            if($article && $entite){
                $article->addEntite($entite);
                $em->persist($article);
                $em->flush();
            }
        }

        return $this->redirectToRoute("index");
    }

    /**
     * test xml
     * @Route("/testxml", name="testxml", methods={"GET","POST"}, options={"expose" = true})
     * @param ArticleRepository $articleRepository
     * @param EntityManagerInterface $em
     * @return Response
     * @throws Exception
     * @IsGranted("ROLE_ADMIN")
     */
    public function testxml(ArticleRepository $articleRepository, EntityManagerInterface $em){
        foreach ($articleRepository->findAll() as $article){
            if($article->getGencode() != ""){
                $xml = simplexml_load_file("https://www.dvdfr.com/api/search.php?gencode=".$article->getGencode());
                $xml = $xml->dvd;
                $json = json_encode($xml);
                $array = json_decode($json,TRUE);
                $cover = $array['cover'] ?? null;
                $titre = $array['titres']['fr'] ?? null;
                $annee = $array['annee'] ?? null;
                if($cover != null) $article->setVignette($cover);
                if($titre != null) $article->setTitre($titre);
                if($annee != null) $article->setDatePublication(DateTime::createFromFormat('Y', $annee));
                $em->persist($article);
                $em->flush();
            }
        }

        return $this->redirectToRoute("index");
    }

    /**
     * tesl
     * @Route("/test", name="test", methods={"GET","POST"}, options={"expose" = true})
     * @param ArticleRepository $articleRepository
     * @param EntityManagerInterface $em
     * @return Response
     * @throws Exception
     * @IsGranted("ROLE_ADMIN")
     */
    public function test(ArticleRepository $articleRepository, EntityManagerInterface $em){
        dd(DateTime::createFromFormat('Y', '2009'));

        return $this->redirectToRoute("index");
    }
}
