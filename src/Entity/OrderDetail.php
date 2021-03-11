<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderDetailRepository::class)
 */
class OrderDetail
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
     * @var int
     *
     * @ORM\Column(name="quantity_ordered", type="integer", nullable=false)
     */
    private $quantityOrdered;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantityOrdered(): ?int
    {
        return $this->quantityOrdered;
    }

    public function setQuantityOrdered(int $quantityOrdered): self
    {
        $this->quantityOrdered = $quantityOrdered;

        return $this;
    }


}
