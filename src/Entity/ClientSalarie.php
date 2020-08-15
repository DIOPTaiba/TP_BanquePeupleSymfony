<?php

namespace App\Entity;

use App\Repository\ClientSalarieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientSalarieRepository::class)
 */
class ClientSalarie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Clients::class, inversedBy="clientSalarie", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $profession;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomEmployeur;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adresseEntreprise;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $raisonSocial;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $identifiantEntreprise;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $carteIdentite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(Clients $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(string $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getNomEmployeur(): ?string
    {
        return $this->nomEmployeur;
    }

    public function setNomEmployeur(string $nomEmployeur): self
    {
        $this->nomEmployeur = $nomEmployeur;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresseEntreprise;
    }

    public function setAdresseEntreprise(string $adresseEntreprise): self
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    public function getRaisonSocial(): ?string
    {
        return $this->raisonSocial;
    }

    public function setRaisonSocial(string $raisonSocial): self
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    public function getIdentifiantEntreprise(): ?string
    {
        return $this->identifiantEntreprise;
    }

    public function setIdentifiantEntreprise(string $identifiantEntreprise): self
    {
        $this->identifiantEntreprise = $identifiantEntreprise;

        return $this;
    }

    public function getCarteIdentite(): ?string
    {
        return $this->carteIdentite;
    }

    public function setCarteIdentite(string $carteIdentite): self
    {
        $this->carteIdentite = $carteIdentite;

        return $this;
    }
}
