<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class UserController extends AbstractController
{
    /**
    * @Route("/admin/users/show", name="admin_users")
    */
    public function showUser()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin/users/user_show.html.twig', ['users' => $users]);
    }

    /**
     * @Route("/admin/users/add", name="admin_users_add", methods={"GET","POST"})
     */
    public function  addUser(Request $request, EntityManagerInterface $manager)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'sucess',
                'L\'utilisateur '.$user->getUsername().' à bien été ajouté !'
            );
            return $this->redirectToRoute('admin_users');
        }
        
        return $this->render('admin/users/user_add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

}
