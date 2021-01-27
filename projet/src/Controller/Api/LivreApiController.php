<?php


namespace App\Controller\Api;


use App\Service\Api\LivreApi;
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
        $livreApi->getDataFromIsbn($isbn);
        return $this->redirectToRoute('annonce_index');
    }
    
}