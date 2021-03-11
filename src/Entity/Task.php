<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
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
     * @ORM\Column(name="task_nametask_name", type="string", length=255, nullable=false)
     */
    private $taskNametaskName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskNametaskName(): ?string
    {
        return $this->taskNametaskName;
    }

    public function setTaskNametaskName(string $taskNametaskName): self
    {
        $this->taskNametaskName = $taskNametaskName;

        return $this;
    }


}
