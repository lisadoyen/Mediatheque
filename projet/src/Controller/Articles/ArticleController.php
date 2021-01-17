<?php

namespace App\Controller\Articles;

use App\Data\SearchData;
use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Avis;
use App\Entity\Bibliotheque;
use App\Entity\Enregistrement;
use App\Entity\Entite;
use App\Entity\Favoris;
use App\Entity\Genre;
use App\Entity\StatutEnregistrement;
use App\Entity\TypeEntite;
use App\Form\AvisFormType;
use App\Form\BibliothequeType;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\AvisRepository;
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
use App\Service\Nouveaute;
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

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles/show", name="articles_show", methods={"GET", "POST"})
     * @Route("/articles/genres/{id}/show", name="genres_id_articles_show", methods={"GET", "POST"})
     * @param null $id
     * @param SessionInterface $session
     * @param ArticleRepository $ar
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param Nouveaute $new
     * @param EntiteRepository $entite
     * @return Response
     */
    public function showAll($id = null, SessionInterface $session, ArticleRepository $ar,
                            CategorieRepository $categorieRepo,
                            ActionRepository $actionsRepo,
                            Request $request, PaginatorInterface $paginator, Nouveaute $new,
                            EntiteRepository $entite, TypeEntiteRepository $typeEntite)
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

            $nouveaute = $new->findArticleNouveaute($categorieRepo, $actionsRepo);

            return $this->render('articles/show_all_articles.html.twig', [
                'articles' => $livres,
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

            $nouveaute = $new->findArticleNouveaute($categorieRepo, $actionsRepo);


            return $this->render('articles/show_all_articles.html.twig', [
                'session' => $session,
                'articles' => $livres,
                'genres' => $this->getDoctrine()->getRepository(Genre::class)->findAll(),
                'donnees' => $donnees,
                'nouveaute' => $nouveaute,
            ]);
        }
    }

    /**
     * @Route("/article/filtre/clear", name="filter_clear", methods={"GET", "POST"})
     * @param SessionInterface $session
     * @return Response
     */
    public function clearFiltrer(SessionInterface $session){
        $session->set('donnees', null);
        return $this->redirectToRoute('articles_show');
    }

    /**
     * @Route("/articles/getISBN", name="get_ISBN", methods={"GET","POST"})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getISBN(){
        return $this->render('articles/get_ISBN.html.twig');
    }

    /**
     * @Route("/articles/get/{isbn}", name="livres_search_isbn", methods={"GET","POST"})
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
     * @Route("/articles/add", name="add_livre", methods={"GET","POST"}, options={"expose" = true})
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

        return $this->render('articles/add.html.twig',[
            'form' => $form->createView(),
            'data' => $data ?? null
        ]);
    }

    /**
     * @Route("/article/{id}", name="article_details",methods={"GET","POST"} )
     * @param UserInterface $user
     * @param Request $request
     * @param AvisRepository $avisRepository
     * @param ArticleRepository $articleRepository
     * @param FavorisRepository $favorisRepository
     * @param CategorieRepository $categorieRepository
     * @param ActionRepository $actionRepository
     * @param int $id
     * @param Nouveaute $new
     * @return Response
     */
    public function livreDetails(UserInterface $user, Request $request,
                                 AvisRepository $avisRepository,
                                 ArticleRepository $articleRepository,
                                 FavorisRepository $favorisRepository,
                                 CategorieRepository $categorieRepository,
                                 ActionRepository $actionRepository, $id=1,
                                Nouveaute $new): Response
    {

        $livre = $articleRepository->findOneBy(['id' => $id]);
        $fav = $favorisRepository->findOneBy(['utilisateur'=>$this->getUser(), 'article'=>$livre]);
        $nouveaute = $new->findArticleNouveaute($categorieRepository,$actionRepository);
        $nouveau = null;
        foreach($nouveaute as $new){
            if($new['id'] == $livre->getId()){
                $nouveau = $livre->getId();
            }
        }

        $avis = $avisRepository->findBy(['article'=>$id]);

        $form = $this->createForm(AvisFormType::class, NULL, [
            'action' => '/article/'.$id,
            'method' => 'POST'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Avis $commentaire */
            $commentaire = $form->getData();
            $commentaire->setArticle($articleRepository->find($id));
            $commentaire->setSignale(0);
            $commentaire->setUtilisateur($user);
            $this->getDoctrine()->getManager()->persist($commentaire);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('article_details', ['id' => $id]);
        }


        return $this->render('articles/show_article_details.html.twig', [
            'article' => $livre,
            'favoris' => $fav,
            'nouveaute' => $nouveaute,
            'idNouveaute' => $nouveau,
            'avis' => $avis,
            'form' => $form->createView()
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
     * transfert bdd
     * @Route("/transfertLivre", name="modifLivre", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     * @throws Exception
     */
    public function transfertBDDLivre(LivreOldRepository $livreOldRepository,
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
        $typeAchat= $typeEnregistrementRepository->find(1);
        $livres= $livreOldRepository->findAll();
        $typeAuteur = $typeEntiteRepository->find(1);
        $categorieLivre = $categorieRepository->find(1);
        $tranche = $trancheAgeRepository->find(1);
        $statutEmprunte = $statutEnregistrementRepository->find(5);
        $statutAchete = $statutEnregistrementRepository->find(6);
        $statutRendu = $statutEnregistrementRepository->find(7);
        $empruntable = $statutRepository->find(1);
        $donne = $statutRepository->find(4);
        $emprunte = $statutRepository->find(6);
        $perdu = $statutRepository->find(3);
        $vendu = $statutRepository->find(5);

        $obtention = $typeActionRepository->find(1); // achat
        $creation = $typeActionRepository->find(2); // mise en bdd
        $modification = $typeActionRepository->find(3);
        $declassement = $typeActionRepository->find(4);

        $sport = $genreRepository->find(3);

        $em->getConnection()->getConfiguration()->setSQLLogger(null);

        foreach ($livres as $livre) {
            $nom = $livre->getNomAuteur();
            $prenom = $livre->getPrenomAuteur();
            $auteur = NULL;
            if(!$entiteRepository->findBy(['nom' => $nom]) && !preg_match('~[0-9]+~', $nom)){
                $auteur = new Entite();
                $auteur->setTypeEntite($typeAuteur);
                $auteur->setNom($nom);
                $auteur->setPrenom($prenom);
                $em->persist($auteur);
                $em->flush();
            }
            $article = new Article();
            $article->setCategorie($categorieLivre);

            if($auteur != NULL) $article->addEntite($auteur);
            $article->setTrancheAge($tranche);

            if($livre->getCodeEtat() === 'AC'){
                $article->setStatut($empruntable);
                if($livre->getSortie() === 'S'){
                    $article->setStatut($emprunte);
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement(new \DateTime());
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutEmprunte); // statut emprunte
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $date = new \DateTime();
                    $date->add(new \DateInterval('P'.$categorieLivre->getDureeEmpruntMax().'D'));
                    $enregistrement->setDateRenduTheorique($date);
                    $enregistrement->setNoCommande(2);
                    $em->persist($enregistrement);
                }
                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();
                for($i = 0; $i < $livre->getNbSortie() ; $i++){
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
                    $enregistrement->setNoCommande(2);
                    $em->persist($enregistrement);
                }
            }else if ($livre->getCodeEtat() === ('PERDU') ){
                $article->setStatut($perdu);
            }else if ($livre->getCodeEtat() === 'DON'){
                $article->setStatut($donne);
            }else{
                $article->setStatut($vendu);

                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();

                $enregistrement = new Enregistrement();
                $enregistrement->setArticle($article);
                $enregistrement->setDateEnregistrement($date);
                $enregistrement->setDateRenduTheorique( $dateRendu);
                $enregistrement->setDateRendu($dateRendu);
                $enregistrement->setDatePreparationFini($datePrepFini);
                $enregistrement->setTypeEnregistrement($typeAchat); // type Emprunt
                $enregistrement->setStatutEnregistrement($statutAchete); // statut rendu
                $enregistrement->addStaff($admin);
                $enregistrement->setUtilisateur($admin);
                $enregistrement->setNoCommande(2);
                $em->persist($enregistrement);
            }

            // création du livre dans la bdd
            $action = new Action();
            $date = $livre->getDateCreation();
            if($date == NULL){
                $date= $livre->getDateModif();
                if($date == NULL){
                    $date = $livre->getDateRetrait();
                }
            }
            $action->setStaff($admin);
            $action->setDate($date);
            $action->setTypeAction($creation);
            $article->addAction($action);
            $em->persist($action);

            // modification du livre dans la bdd
            $dateModif = $livre->getDateModif();
            if ($dateModif != NULL){
                $action = new Action();
                $action->setStaff($admin);
                $action->setDate($dateModif);
                $action->setTypeAction($modification);
                $article->addAction($action);
                $em->persist($action);
            }

            // obtention du livre
            $dateAchat = $livre->getDateAchat();
            if ($dateAchat!= NULL){
                $action = new Action();
                $action->setDate($dateAchat);
                $action->setStaff($admin);
                $action->setTypeAction($obtention);
                $article->addAction($action);
                $em->persist($action);
            }

            // déclassement du livre
            $dateModif = $livre->getDateRetrait();
            if ($dateModif != NULL) {
                $action = new Action();
                $action->setDate($dateModif);
                $action->setStaff($admin);
                $action->setTypeAction($declassement);
                $article->addAction($action);
                $em->persist($action);
            }

            $article->setGenre($sport);
            $article->setGencode($livre->getGencode());
            $article->setCodeArticle($livre->getCodeArticle());
            $article->setTitre($livre->getTitre());
            $article->setMontantObtention($livre->getPrixAchat());
            $article->setMontantCaution(5.30);
            $article->setMontantVente(5.40);
            $article->setNumerique(false);
            $em->persist($article);
            $em->flush();
        }

        return $this->redirectToRoute("index");
    }
}
