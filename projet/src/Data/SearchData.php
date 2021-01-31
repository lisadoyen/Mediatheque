<?php
namespace App\Data;

use App\Entity\Categorie;
use App\Entity\Genre;
use App\Entity\Statut;
use App\Entity\TrancheAge;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SearchData{

    /**
     * @var string
     */
    public $q = '';
    /**
     * @var string
     */
    public $date = '';
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
    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    public $nouveaute = false;
    /**
     * @var Statut[]
     */
    public $statut = [];
    /**
     * @var TrancheAge[]
     */
    public $age = [];

}