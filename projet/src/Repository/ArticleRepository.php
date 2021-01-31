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
     * Récupère le prix minimum et maximum correspondant à une recherche
     * @param SearchData $search
     * @return int[]
     */
    public function findMinMax(SearchData $search):array{
        $results = $this->getSearchQuery($search, true)
            ->select('MIN(a.montantVente) as min','MAX(a.montantVente) as max')
            ->getQuery()
            ->getScalarResult();
        return [(int)$results[0]['min'], (int)$results[0]['max']];
    }

    /**
     * @param SearchData $search
     * @return int|mixed|string
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
            ->join('a.categorie', 'c')
            ->join('a.actions', 'ac')
            ->join('a.statut', 's')
            ->join('a.trancheAge', 'age')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable'");
            // selection des articles avec le statut vendable ou empruntable

        if(!empty($search->date)){
            $query = $query
                ->andWhere('a.datePublication LIKE :date')
                ->setParameter('date', "%{$search->date}%");
        }

        if(!empty($search->q)){
            $query = $query
                ->andWhere('a.titre LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        if(!empty($search->min) && $ignorePrice == false){
            $query=$query
                ->andWhere('a.montantVente >= :min')
                ->setParameter('min', $search->min);
        }
        if(!empty($search->max)&& $ignorePrice == false){
            $query=$query
                ->andWhere('a.montantVente <= :max')
                ->setParameter('max', $search->max);
        }

        if(!empty($search->genre)) {
            $query = $query
                ->andWhere('g.id IN (:genre)')
                ->setParameter('genre', $search->genre);
        }

        if(!empty($search->categorie)) {
            $query = $query
                ->andWhere('c.id IN (:categorie)')
                ->setParameter('categorie', $search->categorie);
        }

        if(!empty($search->statut)) {
            $query = $query
                ->andWhere("s.id IN (:statut)")
                ->setParameter('statut', $search->statut);
        }

        if(!empty($search->age)) {
            $query = $query
                ->andWhere("age.id IN (:age)")
                ->setParameter('age', $search->age);
        }

        if(!empty($search->nouveaute)){
            $query=$query
                ->andWhere('');
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
