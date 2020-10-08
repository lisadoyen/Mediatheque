<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatheque
 *
 * @ORM\Table(name="mediatheque", indexes={@ORM\Index(name="TEST_BASE_AUTEUR", columns={"idAuteur"})})
 * @ORM\Entity
 */
class Mediatheque
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMediatheque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmediatheque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_article", type="string", length=11, nullable=true)
     */
    private $codeArticle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=71, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_genre", type="string", length=7, nullable=true)
     */
    private $codeGenre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_sous_genre", type="string", length=10, nullable=true)
     */
    private $codeSousGenre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_genre", type="string", length=21, nullable=true)
     */
    private $libelleGenre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_support", type="string", length=10, nullable=true)
     */
    private $codeSupport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_support", type="string", length=25, nullable=true)
     */
    private $libelleSupport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_achat", type="string", length=255, nullable=true)
     */
    private $dateAchat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_création", type="string", length=10, nullable=true)
     */
    private $dateCréation;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAuteur", referencedColumnName="idAuteur")
     * })
     */
    private $idauteur;

    public function getIdmediatheque(): ?int
    {
        return $this->idmediatheque;
    }

    public function getCodeArticle(): ?string
    {
        return $this->codeArticle;
    }

    public function setCodeArticle(?string $codeArticle): self
    {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCodeGenre(): ?string
    {
        return $this->codeGenre;
    }

    public function setCodeGenre(?string $codeGenre): self
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    public function getCodeSousGenre(): ?string
    {
        return $this->codeSousGenre;
    }

    public function setCodeSousGenre(?string $codeSousGenre): self
    {
        $this->codeSousGenre = $codeSousGenre;

        return $this;
    }

    public function getLibelleGenre(): ?string
    {
        return $this->libelleGenre;
    }

    public function setLibelleGenre(?string $libelleGenre): self
    {
        $this->libelleGenre = $libelleGenre;

        return $this;
    }

    public function getCodeSupport(): ?string
    {
        return $this->codeSupport;
    }

    public function setCodeSupport(?string $codeSupport): self
    {
        $this->codeSupport = $codeSupport;

        return $this;
    }

    public function getLibelleSupport(): ?string
    {
        return $this->libelleSupport;
    }

    public function setLibelleSupport(?string $libelleSupport): self
    {
        $this->libelleSupport = $libelleSupport;

        return $this;
    }

    public function getDateAchat(): ?string
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?string $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateCréation(): ?string
    {
        return $this->dateCréation;
    }

    public function setDateCréation(?string $dateCréation): self
    {
        $this->dateCréation = $dateCréation;

        return $this;
    }

    public function getIdauteur(): ?Auteur
    {
        return $this->idauteur;
    }

    public function setIdauteur(?Auteur $idauteur): self
    {
        $this->idauteur = $idauteur;

        return $this;
    }


}
