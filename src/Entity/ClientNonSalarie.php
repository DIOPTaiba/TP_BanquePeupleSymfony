<?php

namespace App\Entity;

use App\Repository\ClientNonSalarieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientNonSalarieRepository::class)
 */
class ClientNonSalarie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Clients::class, inversedBy="clientNonSalarie", cascade={"persist", "remove"})
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
