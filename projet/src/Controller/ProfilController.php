<?php

namespace App\Controller;

use App\Form\EditProfilFormType;
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
        return $this->render('profil/profil.html.twig');
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
        return $this->render('profil/_profil_form.html.twig', [
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
    	return $this->render('profil/_profil_form_reset_password.html.twig');
    }
}