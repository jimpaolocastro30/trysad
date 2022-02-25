<?php

namespace App\Entity;

use App\Repository\SublocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SublocationRepository::class)
 */
class Sublocation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sublocation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(int $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getSublocation(): ?string
    {
        return $this->sublocation;
    }

    public function setSublocation(string $sublocation): self
    {
        $this->sublocation = $sublocation;

        return $this;
    }
}
