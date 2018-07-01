<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $lastname;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LegalCase", mappedBy="client")
     * @var ArrayCollection
     */
    private $legalCases;

    public function __construct()
    {
        $this->legalCases = new ArrayCollection();
    }

    public function __toString() : string
    {
        return sprintf('%s %s', $this->firstname, $this->lastname);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getFirstname() : ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname) : self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname() : ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname) : self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return Collection|LegalCase[]
     */
    public function getLegalCases() : Collection
    {
        return $this->legalCases;
    }

    public function addLegalCase(LegalCase $legalCase) : self
    {
        if (!$this->legalCases->contains($legalCase)) {
            $this->legalCases[] = $legalCase;
            $legalCase->setClient($this);
        }

        return $this;
    }

    public function removeLegalCase(LegalCase $legalCase) : self
    {
        if ($this->legalCases->contains($legalCase)) {
            $this->legalCases->removeElement($legalCase);
            // set the owning side to null (unless already changed)
            if ($legalCase->getClient() === $this) {
                $legalCase->setClient(null);
            }
        }

        return $this;
    }
}
