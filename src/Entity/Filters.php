<?php

namespace App\Entity;

use App\Repository\FiltersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FiltersRepository::class)
 */
class Filters
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
    private $photoid;

    /**
     * @ORM\Column(type="integer")
     */
    private $animal;

    /**
     * @ORM\Column(type="integer")
     */
    private $subanimal;

    /**
     * @ORM\Column(type="integer")
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $sublocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $photoyear;

    /**
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $trip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoid(): ?int
    {
        return $this->photoid;
    }

    public function setPhotoid(int $photoid): self
    {
        $this->photoid = $photoid;

        return $this;
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

    public function getSubanimal(): ?int
    {
        return $this->subanimal;
    }

    public function setSubanimal(int $subanimal): self
    {
        $this->subanimal = $subanimal;

        return $this;
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

    public function getSublocation(): ?int
    {
        return $this->sublocation;
    }

    public function setSublocation(int $sublocation): self
    {
        $this->sublocation = $sublocation;

        return $this;
    }

    public function getPhotoyear(): ?int
    {
        return $this->photoyear;
    }

    public function setPhotoyear(int $photoyear): self
    {
        $this->photoyear = $photoyear;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTrip(): ?int
    {
        return $this->trip;
    }

    public function setTrip(int $trip): self
    {
        $this->trip = $trip;

        return $this;
    }
}
