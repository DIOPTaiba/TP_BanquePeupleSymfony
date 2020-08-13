<?php

namespace App\Entity;

use App\Repository\CompteCourantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteCourantRepository::class)
 */
class CompteCourant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Comptes::class, inversedBy="compteCourant", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compte;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $agios;

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

    public function getAgios(): ?string
    {
        return $this->agios;
    }

    public function setAgios(string $agios): self
    {
        $this->agios = $agios;

        return $this;
    }
}
