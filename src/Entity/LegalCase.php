<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LegalCaseRepository")
 */
class LegalCase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lawyer", inversedBy="legalCases")
     * @ORM\JoinColumn(nullable=false)
     * @var null|\App\Entity\Lawyer
     */
    private $lawyer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="legalCases")
     * @ORM\JoinColumn(nullable=false)
     * @var null|\App\Entity\Client
     */
    private $client;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $caseDescription;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $legalField;

    public function getId() : int
    {
        return $this->id;
    }

    public function getLawyer() : ?Lawyer
    {
        return $this->lawyer;
    }

    public function setLawyer(?Lawyer $lawyer) : self
    {
        $this->lawyer = $lawyer;

        return $this;
    }

    public function getClient() : ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client) : self
    {
        $this->client = $client;

        return $this;
    }

    public function getCaseDescription() : ?string
    {
        return $this->caseDescription;
    }

    public function setCaseDescription(string $caseDescription) : self
    {
        $this->caseDescription = $caseDescription;

        return $this;
    }

    public function getLegalField() : ?string
    {
        return $this->legalField;
    }

    public function setLegalField(string $legalField) : self
    {
        $this->legalField = $legalField;

        return $this;
    }
}
