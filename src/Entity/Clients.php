<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 */
class Clients
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ResponsableCompte::class, inversedBy="clients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $responsableCompte;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $typeClient;

    /**
     * @ORM\OneToOne(targetEntity=ClientMoral::class, mappedBy="client", cascade={"persist", "remove"})
     */
    private $clientMoral;

    /**
     * @ORM\OneToOne(targetEntity=ClientNonSalarie::class, mappedBy="client", cascade={"persist", "remove"})
     */
    private $clientNonSalarie;

    /**
     * @ORM\OneToOne(targetEntity=ClientSalarie::class, mappedBy="client", cascade={"persist", "remove"})
     */
    private $clientSalarie;

    /**
     * @ORM\OneToMany(targetEntity=Comptes::class, mappedBy="client", orphanRemoval=true)
     */
    private $comptes;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponsableCompte(): ?ResponsableCompte
    {
        return $this->responsableCompte;
    }

    public function setResponsableCompte(?ResponsableCompte $responsableCompte): self
    {
        $this->responsableCompte = $responsableCompte;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getTypeClient(): ?string
    {
        return $this->typeClient;
    }

    public function setTypeClient(string $typeClient): self
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    public function getClientMoral(): ?ClientMoral
    {
        return $this->clientMoral;
    }

    public function setClientMoral(ClientMoral $clientMoral): self
    {
        $this->clientMoral = $clientMoral;

        // set the owning side of the relation if necessary
        if ($clientMoral->getClient() !== $this) {
            $clientMoral->setClient($this);
        }

        return $this;
    }

    public function getClientNonSalarie(): ?ClientNonSalarie
    {
        return $this->clientNonSalarie;
    }

    public function setClientNonSalarie(ClientNonSalarie $clientNonSalarie): self
    {
        $this->clientNonSalarie = $clientNonSalarie;

        // set the owning side of the relation if necessary
        if ($clientNonSalarie->getClient() !== $this) {
            $clientNonSalarie->setClient($this);
        }

        return $this;
    }

    public function getClientSalarie(): ?ClientSalarie
    {
        return $this->clientSalarie;
    }

    public function setClientSalarie(ClientSalarie $clientSalarie): self
    {
        $this->clientSalarie = $clientSalarie;

        // set the owning side of the relation if necessary
        if ($clientSalarie->getClient() !== $this) {
            $clientSalarie->setClient($this);
        }

        return $this;
    }

    /**
     * @return Collection|Comptes[]
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Comptes $compte): self
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes[] = $compte;
            $compte->setClient($this);
        }

        return $this;
    }

    public function removeCompte(Comptes $compte): self
    {
        if ($this->comptes->contains($compte)) {
            $this->comptes->removeElement($compte);
            // set the owning side to null (unless already changed)
            if ($compte->getClient() === $this) {
                $compte->setClient(null);
            }
        }

        return $this;
    }
}
