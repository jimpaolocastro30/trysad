<?php

namespace App\Entity;

use App\Repository\SubAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubAnimalRepository::class)
 */
class SubAnimal
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
    private $animal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subanimal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimal(): ?int
    {
        return $this->animal;
    }

    public function setAnimal(int $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    public function getSubanimal(): ?string
    {
        return $this->subanimal;
    }

    public function setSubanimal(string $subanimal): self
    {
        $this->subanimal = $subanimal;

        return $this;
    }
}
