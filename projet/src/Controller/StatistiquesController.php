<?php

namespace App\Controller;

use App\Repository\EnregistrementRepository;

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

class StatistiquesController extends AbstractController
{
    /**
     * @Route("/admin/statistiques", name="admin_statistiques", methods={"GET"})
     * @param Request $request
     * @param EnregistrementRepository $enregistrementRepository
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function statistiques(Request $request, EnregistrementRepository $enregistrementRepository,  PaginatorInterface $paginator): Response
    {

        $articles = $paginator->paginate(
            $enregistrementRepository->getNbEmpruntByArticle(),
            $request->query->getInt('page', 1),
            10
        );
        return $this->render('statistiques/statistiques.html.twig', ['articles'=>$articles]);
    }

}
