<?php

namespace App\Entity;

use App\Repository\EtatCompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtatCompteRepository::class)
 */
class EtatCompte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Comptes::class, inversedBy="etatComptes")
     */
    private $compte;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $etatCompte;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateChangementEtat;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Comptes[]
     */
    public function getCompte(): Collection
    {
        return $this->compte;
    }

    public function addCompte(Comptes $compte): self
    {
        if (!$this->compte->contains($compte)) {
            $this->compte[] = $compte;
        }

        return $this;
    }

    public function removeCompte(Comptes $compte): self
    {
        if ($this->compte->contains($compte)) {
            $this->compte->removeElement($compte);
        }

        return $this;
    }

    public function getEtatCompte(): ?string
    {
        return $this->etatCompte;
    }

    public function setEtatCompte(string $etatCompte): self
    {
        $this->etatCompte = $etatCompte;

        return $this;
    }

    public function getDateChangementEtat(): ?\DateTimeInterface
    {
        return $this->dateChangementEtat;
    }

    public function setDateChangementEtat(\DateTimeInterface $dateChangementEtat): self
    {
        $this->dateChangementEtat = $dateChangementEtat;

        return $this;
    }
}
