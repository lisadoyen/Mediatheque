<?php

namespace App\Controller;

use App\Data\ArticleSearch;
use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Entite;
use App\Form\php;
use App\Form\ArticleType;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\EntiteRepository;
use App\Repository\StatutRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEntiteRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article_admin")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE')")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findBy([], [],5),
        ]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request,
                        TypeEntiteRepository $typeEntiteRepository,
                        TypeActionRepository $typeActionRepository): Response
    {
        $article = new Article();

        // premier champ 'auteur'
        $entite = new Entite();
        $entite->setTypeEntite($typeEntiteRepository->findOneBy(['id' => 1]));
        $article->addEntite($entite);

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // ajout des entites
            foreach ($article->getEntites() as $entite) {
                $find = $this->exists($entite);
                // creer l'entite si elle n'existe pas
                if (!$find) $entityManager->persist($entite);
                // ou remplace par l'entite existante
                else {
                    $article->removeEntite($entite);
                    $article->addEntite($find);
                }
            }

            // ajout de l'action creation
            // type id 2 = creation
            $creation = new Action();
            $creation->setDate(new \DateTime());
            $creation->setStaff($this->getUser());
            $creation->setTypeAction($typeActionRepository->findOneBy(['id' => 2]));
            $creation->setArticle($article);
            // ajout de l'action obtention
            // type id 1 = obtention
            $obtention = new Action();
            $obtention->setDate($form->get('dateObtention')->getData());
            $obtention->setStaff($this->getUser());
            $obtention->setTypeAction($typeActionRepository->findOneBy(['id' => 1]));
            $obtention->setArticle($article);

            $entityManager->persist($article);
            $entityManager->persist($obtention);
            $entityManager->persist($creation);
            $entityManager->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Formulaire de recherche rapide d'un article
     * @Route("/search", name="article_search", methods={"GET"})
     */
    public function search(Request $request, ArticleRepository $articleRepository) {
        $data = new ArticleSearch();
        $form = $this->createForm(php::class, $data);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $articleRepository->findOneBy([$data->type => $data->value]);
            if ($article) return $this->redirectToRoute('article_edit', ['id' => $article->getId()]);
            else $this->addFlash('danger', 'Aucun article ne correspond à cette recherche.');
        }

        return $this->render('article/search.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article, ActionRepository $actionRepository): Response
    {
        $dateObtention = $actionRepository->findOneBy(['article' => $article, 'typeAction' => 1])->getDate()->format('m/d/Y');
        $form = $this->createForm(ArticleType::class, $article, ['dateObtention'=> $dateObtention]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Passe l'article en déclassé (statut 'vendable') (pas de suppression cf. cahier des charges)
     * @Route("/{id}", name="article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Article $article, StatutRepository $statutRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $article->setStatut($statutRepository->findOneBy(['id' => 2]));
            $entityManager->persist($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_index');
    }

    public function exists(Entite $entite): ?Entite
    {
        if (!empty($entite)) {
            $entiteRepository = $this->getDoctrine()->getRepository(Entite::class);
            $find = $entiteRepository->findOneBy(['nom' => $entite->getNom(), 'prenom' => $entite->getPrenom(), 'typeEntite' => $entite->getTypeEntite()]);
            if($find)
                return $find;
        }
        return null;
    }
}
