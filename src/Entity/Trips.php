<?php

namespace App\Entity;

use App\Repository\TripsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TripsRepository::class)
 */
class Trips
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
    private $trip;

    /**
     * @ORM\Column(type="integer")
     */
    private $trip_month;

    /**
     * @ORM\Column(type="integer")
     */
    private $trip_year;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrip(): ?string
    {
        return $this->trip;
    }

    public function setTrip(string $trip): self
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

    public function getTripYear(): ?int
    {
        return $this->trip_year;
    }

    public function setTripYear(int $trip_year): self
    {
        $this->trip_year = $trip_year;

        return $this;
    }
}
