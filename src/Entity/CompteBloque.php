<?php

namespace App\Entity;

use App\Repository\CompteBloqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteBloqueRepository::class)
 */
class CompteBloque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Comptes::class, inversedBy="compteBloque", cascade={"persist", "remove"})
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

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeBlocage;

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

    public function getDureeBlocage(): ?int
    {
        return $this->dureeBlocage;
    }

    public function setDureeBlocage(int $dureeBlocage): self
    {
        $this->dureeBlocage = $dureeBlocage;

        return $this;
    }
}
