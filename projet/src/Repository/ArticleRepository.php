<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * @param SearchData $search
     */
    public function findSearch(SearchData $search){
        return $this->getSearchQuery($search)->getQuery()->getResult();
    }

    public function getSearchQuery(SearchData $search, $ignorePrice = false): \Doctrine\ORM\QueryBuilder
    {
        $query = $this
            ->createQueryBuilder('a') // a = article
            ->select('g', 's', 'a') // g = genre , s = statut
            ->join('a.genre', 'g')
            ->join('a.statut', 's')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable'");
            // selection des articles avec le statut vendable ou empruntable


        if(!empty($search->q)){
            $query = $query
                ->andWhere('a.titre LIKE :q')
                ->setParameter('q', "%{$search->q}");
        }

        if(!empty($search->genre)) {
            $query = $query
                ->andWhere('g.id IN (:genre)')
                ->setParameter('genre', $search->genre);
        }

        return $query;
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
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
    public function findOneBySomeField($value): ?Article
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
