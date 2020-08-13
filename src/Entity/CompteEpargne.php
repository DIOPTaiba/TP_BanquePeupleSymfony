<?php

namespace App\Entity;

use App\Repository\CompteEpargneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteEpargneRepository::class)
 */
class CompteEpargne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Comptes::class, inversedBy="compteEpargne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $fraisOuverture;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $montantRenumeration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompte(): ?Comptes
    {
        return $this->compte;
    }

    public function setCompte(Comptes $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    public function getFraisOuverture(): ?string
    {
        return $this->fraisOuverture;
    }

    public function setFraisOuverture(string $fraisOuverture): self
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    public function getMontantRenumeration(): ?string
    {
        return $this->montantRenumeration;
    }

    public function setMontantRenumeration(string $montantRenumeration): self
    {
        $this->montantRenumeration = $montantRenumeration;

        return $this;
    }
}
