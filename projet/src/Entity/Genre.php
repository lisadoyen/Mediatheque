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
     * @ORM\Column(name="libelle_genre", type="string", length=25, nullable=false, options={"default"="Inconnu"})
     */
    private $libelleGenre = 'Inconnu';

    /**
     * @var string
     *
     * @ORM\Column(name="code_genre", type="string", length=8, nullable=false, options={"default"="Inconnu"})
     */
    private $codeGenre = 'Inconnu';

    /**
     * @var string
     *
     * @ORM\Column(name="code_sous_genre", type="string", length=10, nullable=false)
     */
    private $codeSousGenre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="limite_age", type="integer", nullable=true)
     */
    private $limiteAge;

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

    public function getLimiteAge(): ?int
    {
        return $this->limiteAge;
    }

    public function setLimiteAge(?int $limiteAge): self
    {
        $this->limiteAge = $limiteAge;

        return $this;
    }
    public function __toString(){
        return $this->getLibelleGenre();
    }


}
