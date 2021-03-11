<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValidationRepository::class)
 */
class Validation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_valid", type="boolean", nullable=false)
     */
    private $isValid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }


}
