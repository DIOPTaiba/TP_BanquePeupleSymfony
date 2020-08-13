<?php

namespace App\Entity;

use App\Repository\ComptesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComptesRepository::class)
 */
class Comptes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="comptes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $cleRib;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $solde;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroAgence;

    /**
     * @ORM\OneToOne(targetEntity=CompteBloque::class, mappedBy="compte", cascade={"persist", "remove"})
     */
    private $compteBloque;

    /**
     * @ORM\OneToOne(targetEntity=CompteCourant::class, mappedBy="compte", cascade={"persist", "remove"})
     */
    private $compteCourant;

    /**
     * @ORM\OneToOne(targetEntity=CompteEpargne::class, mappedBy="compte", cascade={"persist", "remove"})
     */
    private $compteEpargne;

    /**
     * @ORM\ManyToMany(targetEntity=EtatCompte::class, mappedBy="compte")
     */
    private $etatComptes;

    public function __construct()
    {
        $this->etatComptes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getCleRib(): ?int
    {
        return $this->cleRib;
    }

    public function setCleRib(int $cleRib): self
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getNumeroAgence(): ?int
    {
        return $this->numeroAgence;
    }

    public function setNumeroAgence(int $numeroAgence): self
    {
        $this->numeroAgence = $numeroAgence;

        return $this;
    }

    public function getCompteBloque(): ?CompteBloque
    {
        return $this->compteBloque;
    }

    public function setCompteBloque(CompteBloque $compteBloque): self
    {
        $this->compteBloque = $compteBloque;

        // set the owning side of the relation if necessary
        if ($compteBloque->getCompte() !== $this) {
            $compteBloque->setCompte($this);
        }

        return $this;
    }

    public function getCompteCourant(): ?CompteCourant
    {
        return $this->compteCourant;
    }

    public function setCompteCourant(CompteCourant $compteCourant): self
    {
        $this->compteCourant = $compteCourant;

        // set the owning side of the relation if necessary
        if ($compteCourant->getCompte() !== $this) {
            $compteCourant->setCompte($this);
        }

        return $this;
    }

    public function getCompteEpargne(): ?CompteEpargne
    {
        return $this->compteEpargne;
    }

    public function setCompteEpargne(CompteEpargne $compteEpargne): self
    {
        $this->compteEpargne = $compteEpargne;

        // set the owning side of the relation if necessary
        if ($compteEpargne->getCompte() !== $this) {
            $compteEpargne->setCompte($this);
        }

        return $this;
    }

    /**
     * @return Collection|EtatCompte[]
     */
    public function getEtatComptes(): Collection
    {
        return $this->etatComptes;
    }

    public function addEtatCompte(EtatCompte $etatCompte): self
    {
        if (!$this->etatComptes->contains($etatCompte)) {
            $this->etatComptes[] = $etatCompte;
            $etatCompte->addCompte($this);
        }

        return $this;
    }

    public function removeEtatCompte(EtatCompte $etatCompte): self
    {
        if ($this->etatComptes->contains($etatCompte)) {
            $this->etatComptes->removeElement($etatCompte);
            $etatCompte->removeCompte($this);
        }

        return $this;
    }
}
