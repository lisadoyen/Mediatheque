<?php

namespace App\Controller\Users;

use App\Entity\User;

use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users_accueil")
     */
    public function accueilUser()
    {
        return $this->render('users/accueil_users.html.twig');
    }

    /**
    * @Route("/users/show", name="users_show")
    */
    public function showUser()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('users/show_users.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/users/add", name="users_add", methods={"GET","POST"})
     */
    public function  addUser(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setpassword($hash);
            $user->setRoles(["ROLE_ADHERENT"]);

            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'sucess',
                'L\'utilisateur '.$user->getIdentifiant().' à bien été ajouté !'
            );
            return $this->redirectToRoute('users_show');
        }
        
        return $this->render('users/add_user.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
