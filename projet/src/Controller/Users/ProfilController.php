<?php

namespace App\Controller\Users;

use App\Entity\Favoris;
use App\Entity\User;
use App\Form\EditProfilFormType;
use App\Repository\ArticleRepository;
use App\Repository\FavorisRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index()
    {
        return $this->render('users/profil/profil.html.twig');
    }

    /**
     * @Route("/profil/edit", name="edit_profil")
     */
    public function editProfil(Request $request, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfilFormType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le profil à bien été mis à jour !'
            );
            return $this->redirectToRoute('profil');
        }
        return $this->render('users/profil/_profil_form.html.twig', [
            'form' => $form->createView()
        ]);
        
    }
    /**
     * @Route("/profil/edit/password", name="edit_password_profil")
     */
    public function editPassword(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
        if($request->isMethod('POST')){
            $user = $this->getUser();
            if($request->request->get('password') == $request->request->get('password_confirm')){
                $user->setPassword($encoder->encodePassword($user,$request->request->get('password')));
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le mot de passe à bien été modifié !'
                );
                return $this->redirectToRoute('profil');
            } else {
                $this->addFlash(
                    'danger',
                    'Les deux mots de passe doivent être identiques !'
                );
            }
        }
    	return $this->render('users/profil/_profil_form_reset_password.html.twig');
    }

    // à déplacer dans des classes appropriées le moment venu
    /**
     * @Route("/favoris", name="favoris")
     */
    public function favoris(FavorisRepository $favorisRepository, ArticleRepository $articleRepository)
    {
        $favoris = $favorisRepository->findBy(['utilisateur' => $this->getUser()]);

        return $this->render('users/profil/favoris.html.twig', ['favoris' => $favoris]);
    }

    /**
     * @Route("/favoris/add/{id}", name="add_article_favoris")
     */
    public function addFavoris(ArticleRepository $articleRepository, $id=1){
        $user = $this->getUser();

        $favoris = new Favoris();
        $favoris->setArticle($articleRepository->find($id));
        $favoris->setUtilisateur($user);
        $this->getDoctrine()->getManager()->persist($favoris);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'L\'article  : ' . $articleRepository->find($id)->getTitre() . ' à été ajouté à vos favoris');

        return $this->redirectToRoute('livre_details',['id'=>$id]);
    }

    /**
     * @Route("/favoris/remove/{id}", name="remove_article_favoris")
     */
    public function removeFavoris(ArticleRepository $articleRepository,FavorisRepository $favorisRepository, $id=1){
        $user = $this->getUser();
        $fav = $favorisRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $this->getDoctrine()->getManager()->remove($fav);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'L\'article  : ' . $articleRepository->find($id)->getTitre() . ' à été supprimé à vos favoris');

        return $this->redirectToRoute('livre_details',['id'=>$id]);
    }
    /**
     * @Route("/favoris/remove/{id}", name="remove_favoris")
     */
    public function removeFavoris2(ArticleRepository $articleRepository,FavorisRepository $favorisRepository, $id=1){
        $user = $this->getUser();
        $fav = $favorisRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $this->getDoctrine()->getManager()->remove($fav);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'L\'article  : ' . $articleRepository->find($id)->getTitre() . ' à été supprimé à vos favoris');

        return $this->redirectToRoute('favoris');
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function panier()
    {
        return $this->render('users/profil/panier.html.twig');
    }
}