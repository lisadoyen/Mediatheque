<?php

namespace App\Repository;

use App\Entity\StatutEnregistrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatutEnregistrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutEnregistrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutEnregistrement[]    findAll()
 * @method StatutEnregistrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutEnregistrementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatutEnregistrement::class);
    }

    // /**
    //  * @return StatutEnregistrement[] Returns an array of StatutEnregistrement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StatutEnregistrement
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
