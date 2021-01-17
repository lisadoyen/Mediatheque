<?php
namespace App\Data;

use App\Entity\Categorie;
use App\Entity\Genre;

class SearchData{

    /**
     * @var string
     */
    public $q = '';
    /**
     * @var Genre[]
     */
    public $genre = [];
    /**
     * @var Categorie[]
     */
    public $categorie = [];
    /**
     * @var null|integer
     */
    public $max;
    /**
     * @var null|integer
     */
    public $min;
}