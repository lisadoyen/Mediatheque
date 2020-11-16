<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=50, nullable=false)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=200, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false, options={"comment"="ROLE_NOM"})
     */
    private $role;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="Bibliotheque", inversedBy="idUtilisateur")
     * @ORM\JoinTable(name="emprunt",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_livre", referencedColumnName="id_livre")
     *   }
     * )
     */
    private $idLivre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLivre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection|Bibliotheque[]
     */
    public function getIdLivre(): Collection
    {
        return $this->idLivre;
    }

    public function addIdLivre(Bibliotheque $idLivre): self
    {
        if (!$this->idLivre->contains($idLivre)) {
            $this->idLivre[] = $idLivre;
        }

        return $this;
    }

    public function removeIdLivre(Bibliotheque $idLivre): self
    {
        if ($this->idLivre->contains($idLivre)) {
            $this->idLivre->removeElement($idLivre);
        }

        return $this;
    }

}
