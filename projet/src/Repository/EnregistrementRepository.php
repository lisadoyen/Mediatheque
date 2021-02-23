<?php

namespace App\Repository;

use App\Entity\Enregistrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enregistrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enregistrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enregistrement[]    findAll()
 * @method Enregistrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnregistrementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enregistrement::class);
    }

    public function getNbEmpruntByArticle(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select('distinct count(a.id) as nbEmpruntParArticle, a.titre')
            ->join('App:Article', 'a')
            ->where('a.id=e.article')
            ->join('App:TypeEnregistrement', 'te')
            ->andWhere('te.id=e.typeEnregistrement')
            ->andWhere("te.libelle='emprunt'")
            ->groupBy('a.id')
            ->addOrderBy('nbEmpruntParArticle','DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * récupère tous les emprunts actifs : en attente, pret, emprunté
     * @return int|mixed|string
     */
    public function findActif(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:StatutEnregistrement', 's')
            ->where('s.id = e.statutEnregistrement')
            ->andWhere("s.libelle !='rendu'")
            ->andWhere("s.libelle !='perdu'")
            ->andWhere("s.libelle !='telecharge'")
            ->addOrderBy('e.dateRendu','ASC');
        ;

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return Enregistrement[] Returns an array of Enregistrement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enregistrement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
