<?php

namespace App\Entity;

use App\Entity\Genre;
use App\Entity\Auteur;
use App\Repository\BibliothequeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliotheque
 *
 * @ORM\Entity(repositoryClass=BibliothequeRepository::class)
 * @ORM\Table(name="bibliotheque", indexes={@ORM\Index(name="FK_auteur", columns={"FK_id_auteur"}), @ORM\Index(name="FK_id_genre", columns={"FK_id_genre"})})
 * @ORM\Entity
 */
class Bibliotheque
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_livre", type="string", length=15, nullable=true)
     */
    private $codeLivre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_ISBN", type="string", length=20, nullable=true)
     */
    private $codeIsbn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre_designation", type="string", length=100, nullable=true)
     */
    private $titreDesignation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=10, nullable=false, options={"default"="papier"})
     */
    private $format = 'papier';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_article", type="string", length=255, nullable=true)
     */
    private $descriptionArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="typologie", type="string", length=10, nullable=false, options={"default"="Tome_seul"})
     */
    private $typologie = 'Tome_seul';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_achat", type="date", nullable=true)
     */
    private $dateAchat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_de_sorties", type="integer", nullable=true)
     */
    private $nombreDeSorties;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_de_retrait", type="date", nullable=true)
     */
    private $dateDeRetrait;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="inactif", type="boolean", nullable=true, options={"comment"="1 = Oui et 0 = Non"})
     */
    private $inactif;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false, options={"default"="1","comment"="1 = Oui et 0 = Non"})
     */
    private $disponible = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=true)
     */
    private $lien;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $fkIdAuteur;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_id_genre", referencedColumnName="id_genre")
     * })
     */
    private $fkIdGenre;

    public function getIdLivre(): ?int
    {
        return $this->idLivre;
    }

    public function getCodeLivre(): ?string
    {
        return $this->codeLivre;
    }

    public function setCodeLivre(?string $codeLivre): self
    {
        $this->codeLivre = $codeLivre;

        return $this;
    }

    public function getCodeIsbn(): ?string
    {
        return $this->codeIsbn;
    }

    public function setCodeIsbn(?string $codeIsbn): self
    {
        $this->codeIsbn = $codeIsbn;

        return $this;
    }

    public function getTitreDesignation(): ?string
    {
        return $this->titreDesignation;
    }

    public function setTitreDesignation(?string $titreDesignation): self
    {
        $this->titreDesignation = $titreDesignation;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getDescriptionArticle(): ?string
    {
        return $this->descriptionArticle;
    }

    public function setDescriptionArticle(?string $descriptionArticle): self
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    public function getTypologie(): ?string
    {
        return $this->typologie;
    }

    public function setTypologie(string $typologie): self
    {
        $this->typologie = $typologie;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getNombreDeSorties(): ?int
    {
        return $this->nombreDeSorties;
    }

    public function setNombreDeSorties(?int $nombreDeSorties): self
    {
        $this->nombreDeSorties = $nombreDeSorties;

        return $this;
    }

    public function getDateDeRetrait(): ?\DateTimeInterface
    {
        return $this->dateDeRetrait;
    }

    public function setDateDeRetrait(?\DateTimeInterface $dateDeRetrait): self
    {
        $this->dateDeRetrait = $dateDeRetrait;

        return $this;
    }

    public function getInactif(): ?bool
    {
        return $this->inactif;
    }

    public function setInactif(?bool $inactif): self
    {
        $this->inactif = $inactif;

        return $this;
    }

    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getFkIdAuteur(): ?Auteur
    {
        return $this->fkIdAuteur;
    }

    public function setFkIdAuteur(?Auteur $fkIdAuteur): self
    {
        $this->fkIdAuteur = $fkIdAuteur;

        return $this;
    }

    public function getFkIdGenre(): ?Genre
    {
        return $this->fkIdGenre;
    }

    public function setFkIdGenre(?Genre $fkIdGenre): self
    {
        $this->fkIdGenre = $fkIdGenre;

        return $this;
    }
}
