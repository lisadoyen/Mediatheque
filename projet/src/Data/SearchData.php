<?php
namespace App\Data;

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
     * @var null|integer
     */
    public $max;
    /**
     * @var null|integer
     */
    public $min;
}