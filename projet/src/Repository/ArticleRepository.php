<?php

namespace App\Repository;

use App\Data\ArticleSearch;
use App\Data\SearchData;
use App\Entity\Article;
use App\Service\Article\Nouveaute;
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
    public function findMinMax(SearchData $search, $order, $type):array{
        $results = $this->getSearchQuery($order,$type,$search, true)
            ->select('MIN(a.montantVente) as min','MAX(a.montantVente) as max')
            ->getQuery()
            ->getScalarResult();
        return [(int)$results[0]['min'], (int)$results[0]['max']];
    }

    public function findByISBN(){
        $query = $this
            ->createQueryBuilder('a')
            ->andWhere("a.gencode != ''")
            ->andWhere("a.categorie = 1")
            ->andWhere("a.gencode != 0");
        return $query->getQuery()->getResult();
    }

    public function findNbArticleTotal(){
        $query = $this
            ->createQueryBuilder('a')
            ->select('count(a.id)')
            ->join('a.statut', 's')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable' or s.libelle = 'emprunte'");
        return $query->getQuery()->getResult();
    }

    /**
     * @param SearchData $search
     * @return int|mixed|string
     */
    public function findSearch(SearchData $search, $order,$type){
        return $this->getSearchQuery($order,$type,$search)->getQuery()->getResult();
    }

    public function getSearchQuery($order,$type,SearchData $search, $ignorePrice = false): \Doctrine\ORM\QueryBuilder
    {
        if($type == null)
            $type = "titre"; // TODO : changer en date d'acquisition
        if($order == null)
            $order = "ASC"; // TODO : changer en DESC

        $query = $this
            ->createQueryBuilder('a') // a = article
            ->select('g', 's', 'a', 'age') // g = genre , s = statut
            ->join('a.genre', 'g')
            ->join('a.categorie', 'c')
            ->join('a.actions', 'ac')
            ->join('a.statut', 's')
            ->join('a.trancheAge', 'age')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable' or s.libelle = 'emprunte'")
            ->groupBy("a.titre")
            ->addOrderBy("a.$type",$order);
            // selection des articles avec le statut vendable ou empruntable et emprunté

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
            $nouveaute = new Nouveaute();
            $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
            $today = $dateTodayConvert->format('Y-m-d');
            $dateDureeMaxConvert=\DateTime::createFromFormat('d/m/Y',$nouveaute->transformDate($today, 500)); // TODO : 500 => récupérer la(les) durée(s) de(s) nouveauté(s) de(s) catégorie(s) du filtre
            $dateDureeMax = $dateDureeMaxConvert->format('Y-m-d');
            $query=$query
                ->andWhere("ac.date BETWEEN '$dateDureeMax' AND '$today'")
                ->groupBy('a.titre');
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
