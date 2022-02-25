<?php

namespace App\Entity;

use App\Repository\UploadsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UploadsRepository::class)
 */
class Uploads
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
    private $imgName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ftype;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $show_in_home;

    /**
     * @ORM\Column(type="integer")
     */
    private $animal;

    /**
     * @ORM\Column(type="integer")
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @ORM\Column(type="integer")
     */
    private $sAnimal;

    /**
     * @ORM\Column(type="integer")
     */
    private $sLocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $trip;

    /**
     * @ORM\Column(type="integer")
     */
    private $trip_month;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timestamp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getImgName(): ?string
    {
        return $this->imgName;
    }

    public function setImgName(string $imgName): self 
    {
        $this->imgName = $imgName;

        return $this;
    }

    public function getFtype(): ?string
    {
        return $this->ftype;
    }

    public function setFtype(string $ftype): self
    {
        $this->ftype = $ftype;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShowInHome(): ?int
    {
        return $this->show_in_home;
    }

    public function setShowInHome(int $show_in_home): self
    {
        $this->show_in_home = $show_in_home;

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

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(int $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getSAnimal(): ?int
    {
        return $this->sAnimal;
    }

    public function setSAnimal(int $sAnimal): self
    {
        $this->sAnimal = $sAnimal;

        return $this;
    }

    public function getSLocation(): ?int
    {
        return $this->sLocation;
    }

    public function setSLocation(int $sLocation): self
    {
        $this->sLocation = $sLocation;

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

    public function getTripMonth(): ?int
    {
        return $this->trip_month;
    }

    public function setTripMonth(int $trip_month): self
    {
        $this->trip_month = $trip_month;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
