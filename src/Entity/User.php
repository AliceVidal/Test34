<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="user_company_name", type="string", length=255, nullable=false)
     */
    private $userCompanyName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_last_name", type="string", length=255, nullable=false)
     */
    private $userLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_first_name", type="string", length=255, nullable=false)
     */
    private $userFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=255, nullable=false)
     */
    private $userPhone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pack", inversedBy="user")
     * @ORM\JoinTable(name="user_pack",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pack_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pack;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pack = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserCompanyName(): ?string
    {
        return $this->userCompanyName;
    }

    public function setUserCompanyName(string $userCompanyName): self
    {
        $this->userCompanyName = $userCompanyName;

        return $this;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function setUserLastName(string $userLastName): self
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function setUserFirstName(string $userFirstName): self
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    public function setUserPhone(string $userPhone): self
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * @return Collection|Pack[]
     */
    public function getPack(): Collection
    {
        return $this->pack;
    }

    public function addPack(Pack $pack): self
    {
        if (!$this->pack->contains($pack)) {
            $this->pack[] = $pack;
        }

        return $this;
    }

    public function removePack(Pack $pack): self
    {
        $this->pack->removeElement($pack);

        return $this;
    }

}
