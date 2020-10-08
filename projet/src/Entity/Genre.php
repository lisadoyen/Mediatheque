<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_genre", type="string", length=25, nullable=false)
     */
    private $libelleGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="code_genre", type="string", length=8, nullable=false)
     */
    private $codeGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="code_sous_genre", type="string", length=10, nullable=false)
     */
    private $codeSousGenre;

    /**
     * @var int
     *
     * @ORM\Column(name="limit_age", type="integer", nullable=false)
     */
    private $limitAge;

    public function getIdGenre(): ?int
    {
        return $this->idGenre;
    }

    public function getLibelleGenre(): ?string
    {
        return $this->libelleGenre;
    }

    public function setLibelleGenre(string $libelleGenre): self
    {
        $this->libelleGenre = $libelleGenre;

        return $this;
    }

    public function getCodeGenre(): ?string
    {
        return $this->codeGenre;
    }

    public function setCodeGenre(string $codeGenre): self
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    public function getCodeSousGenre(): ?string
    {
        return $this->codeSousGenre;
    }

    public function setCodeSousGenre(string $codeSousGenre): self
    {
        $this->codeSousGenre = $codeSousGenre;

        return $this;
    }

    public function getLimitAge(): ?int
    {
        return $this->limitAge;
    }

    public function setLimitAge(int $limitAge): self
    {
        $this->limitAge = $limitAge;

        return $this;
    }


}
