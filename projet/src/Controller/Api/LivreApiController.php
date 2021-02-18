<?php


namespace App\Controller\Api;


use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Entite;
use App\Repository\ArticleRepository;
use App\Repository\EntiteRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEntiteRepository;
use App\Repository\UserRepository;
use App\Service\Api\LivreApi;
use Doctrine\ORM\EntityManagerInterface;
use SimpleXMLElement;
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
     * @param LivreApi $livreApi
     * @return Response
     */
    public function getDataFromIsbn($isbn, LivreApi $livreApi): Response
    {
        $infos = $livreApi->getDataFromIsbn($isbn);
        dd($infos);
        return $this->redirectToRoute('annonce_index');
    }

    /**
     * @Route("/fillBooks", name="api_livre_fill", methods={"GET","POST"})
     * @param LivreApi $livreApi
     * @param ArticleRepository $articleRepository
     * @param EntiteRepository $entiteRepository
     * @param TypeEntiteRepository $typeEntiteRepository
     * @param EntityManagerInterface $em
     * @param UserRepository $userRepository
     * @param TypeActionRepository $typeActionRepository
     * @return Response
     */
    public function fillBooks(LivreApi $livreApi, ArticleRepository $articleRepository, EntiteRepository $entiteRepository,
                              TypeEntiteRepository $typeEntiteRepository, EntityManagerInterface $em, UserRepository $userRepository, TypeActionRepository $typeActionRepository): Response
    {
        $livresWithIsbn = $articleRepository->findByISBN();
        $typeAuteur = $typeEntiteRepository->find(1);
        $typeEditeur = $typeEntiteRepository->find(8);
        $modification = $typeActionRepository->find(3);
        $admin = $userRepository->find(2);

        /** @var Article $livre */
        foreach ($livresWithIsbn as $livre){
            $infos = $livreApi->getDataFromIsbn($livre->getGencode());

            $author = "";
            foreach ($infos['auteurs'] as $auteur) {
                if($auteur != ""){
                    $author = $auteur;
                    break;
                }
            }

            $editor = "";
            foreach ($infos['editeurs'] as $editeur) {
                if($editeur != ""){
                    $editor = $editeur;
                    break;
                }
            }

            $date = "";
            foreach ($infos['publications'] as $publication) {
                if($publication != ""){
                    $date = $publication;
                    break;
                }
            }

            $description = "";
            foreach ($infos['descriptions'] as $des) {
                if($des != ""){
                    $description = $des;
                    break;
                }
            }

            $image = "";
            foreach ($infos['images'] as $img) {
                if($img != ""){
                    $image = $img;
                    break;
                }
            }

            /** @var Entite $findEntite */
            $findEntite = $entiteRepository->findOneBy(['nom' => $author]);
            if($author != "" && !$findEntite){
                $auteur = new Entite();
                $auteur->setTypeEntite($typeAuteur);
                $auteur->setNom($author);
                $em->persist($auteur);
                $em->flush();
                $livre->addEntite($auteur);
            }elseif ($findEntite){
                $livre->addEntite($findEntite);
            }
            /** @var Entite $findEntite */
            $findEntite = $entiteRepository->findOneBy(['nom' => $editor]);
            if($editor != "" && !$findEntite){
                $editeur = new Entite();
                $editeur->setTypeEntite($typeEditeur);
                $editeur->setNom($editor);
                $em->persist($editeur);
                $em->flush();
                $livre->addEntite($editeur);
            }
            elseif ($findEntite){
                $livre->addEntite($findEntite);
            }
            if($date != "") $livre->setDatePublication($date);
            if($image != "") $livre->setVignette($image);
            if($description != "") $livre->setDescription($description);

            $action = new Action();

            $action->setStaff($admin);
            $action->setDate(new \DateTime());
            $action->setTypeAction($modification);
            $livre->addAction($action);
            $em->persist($action);
            $em->flush();

            $em->persist($livre);
            $em->flush();


        }
        return $this->redirectToRoute('annonce_index');
    }
    
}