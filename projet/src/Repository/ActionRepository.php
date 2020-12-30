<?php

namespace App\Repository;

use App\Entity\Action;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @method Action|null find($id, $lockMode = null, $lockVersion = null)
 * @method Action|null findOneBy(array $criteria, array $orderBy = null)
 * @method Action[]    findAll()
 * @method Action[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Action::class);
    }

    public function findIsNouveaute($donnees){
        $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
        $dateDureeMaxConvert=\DateTime::createFromFormat('d/m/Y',$donnees);
        $today = $dateTodayConvert->format('Y-m-d');
        $dateDureeMax = $dateDureeMaxConvert->format('Y-m-d');
        $qb = $this->createQueryBuilder('ac');
        $qb ->select(' distinct ac.date as dateCreation, ar.titre as titre, ar.id as id')
            ->join( 'App:Article', 'ar')
            ->where('ar.id=ac.article')
            ->join( 'App:Statut', 's')
            ->andWhere('s.id=ar.statut')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable'")
            ->andWhere("ac.date BETWEEN '$dateDureeMax' AND '$today'");

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return Action[] Returns an array of Action objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Action
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
