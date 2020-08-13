<?php

namespace App\Entity;

use App\Repository\ClientMoralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientMoralRepository::class)
 */
class ClientMoral
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Clients::class, inversedBy="clientMoral", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomEntreprise;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $identifiantEntreprise;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $raisonSocial;

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

    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

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

    public function getRaisonSocial(): ?string
    {
        return $this->raisonSocial;
    }

    public function setRaisonSocial(string $raisonSocial): self
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }
}
