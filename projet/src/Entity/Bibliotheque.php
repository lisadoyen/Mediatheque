<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliotheque
 *
 * @ORM\Table(name="bibliotheque", indexes={@ORM\Index(name="FK_GENRE", columns={"FK_id_genre"}), @ORM\Index(name="FK_AUTEUR", columns={"FK_id_auteur"})})
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
     * @ORM\Column(name="description_livre", type="string", length=100, nullable=true)
     */
    private $descriptionLivre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="support_livre", type="string", length=25, nullable=true)
     */
    private $supportLivre;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false, options={"comment"="1 = Oui et 0 = Non"})
     */
    private $disponible;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_sorties", type="integer", nullable=true)
     */
    private $nombreSorties;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dernier_retrait", type="date", nullable=true)
     */
    private $dateDernierRetrait;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_achat", type="date", nullable=true)
     */
    private $dateAchat;

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

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idLivre")
     */
    private $idUtilisateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUtilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getDescriptionLivre(): ?string
    {
        return $this->descriptionLivre;
    }

    public function setDescriptionLivre(?string $descriptionLivre): self
    {
        $this->descriptionLivre = $descriptionLivre;

        return $this;
    }

    public function getSupportLivre(): ?string
    {
        return $this->supportLivre;
    }

    public function setSupportLivre(?string $supportLivre): self
    {
        $this->supportLivre = $supportLivre;

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

    public function getNombreSorties(): ?int
    {
        return $this->nombreSorties;
    }

    public function setNombreSorties(?int $nombreSorties): self
    {
        $this->nombreSorties = $nombreSorties;

        return $this;
    }

    public function getDateDernierRetrait(): ?\DateTimeInterface
    {
        return $this->dateDernierRetrait;
    }

    public function setDateDernierRetrait(?\DateTimeInterface $dateDernierRetrait): self
    {
        $this->dateDernierRetrait = $dateDernierRetrait;

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

    /**
     * @return Collection|Utilisateur[]
     */
    public function getIdUtilisateur(): Collection
    {
        return $this->idUtilisateur;
    }

    public function addIdUtilisateur(Utilisateur $idUtilisateur): self
    {
        if (!$this->idUtilisateur->contains($idUtilisateur)) {
            $this->idUtilisateur[] = $idUtilisateur;
            $idUtilisateur->addIdLivre($this);
        }

        return $this;
    }

    public function removeIdUtilisateur(Utilisateur $idUtilisateur): self
    {
        if ($this->idUtilisateur->contains($idUtilisateur)) {
            $this->idUtilisateur->removeElement($idUtilisateur);
            $idUtilisateur->removeIdLivre($this);
        }

        return $this;
    }

}
