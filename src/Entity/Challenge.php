<?php

namespace App\Entity;


use App\Repository\ChallengeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChallengeRepository::class)
 */

class Challenge
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
     * @ORM\Column(name="challenge_name", type="string", length=255, nullable=false)
     */
    private $challengeName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChallengeName(): ?string
    {
        return $this->challengeName;
    }

    public function setChallengeName(string $challengeName): self
    {
        $this->challengeName = $challengeName;

        return $this;
    }


}
