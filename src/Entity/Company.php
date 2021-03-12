<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companySize;

    /**
     * @ORM\Column(type="boolean")
     */
    private $companyGroup;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $livingSpace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectives;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $transitionType;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanySize(): ?string
    {
        return $this->companySize;
    }

    public function setCompanySize(string $companySize): self
    {
        $this->companySize = $companySize;

        return $this;
    }

    public function getCompanyGroup(): ?bool
    {
        return $this->companyGroup;
    }

    public function setCompanyGroup(bool $companyGroup): self
    {
        $this->companyGroup = $companyGroup;

        return $this;
    }

    public function getLivingSpace(): ?string
    {
        return $this->livingSpace;
    }

    public function setLivingSpace(string $livingSpace): self
    {
        $this->livingSpace = $livingSpace;

        return $this;
    }

    public function getObjectives(): ?string
    {
        return $this->objectives;
    }

    public function setObjectives(string $objectives): self
    {
        $this->objectives = $objectives;

        return $this;
    }

    public function getTransitionType(): ?string
    {
        return $this->transitionType;
    }

    public function setTransitionType(string $transitionType): self
    {
        $this->transitionType = $transitionType;

        return $this;
    }


}
