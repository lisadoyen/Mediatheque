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


    /**
     * retourne les articles en cours d'emprunts
     * @return int|mixed|string
     */
    public function findActif()
    {
        $query = $this->getEntityManager()
            ->createQuery("
                SELECT s.id, s.libelle
                FROM App:StatutEnregistrement AS s
                WHERE s.id = 1 or s.id = 2 or s.id = 4 or s.id = 5"
            );
        return $query->getResult();
    }


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