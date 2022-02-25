<?php

namespace App\Entity;

use App\Repository\RowsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RowsRepository::class)
 * @ORM\Table(name="`rows`")
 */
class Rows
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
    private $tempID;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $photo1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $photo2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $photo3;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datecreated;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateupdated;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderid;

    /**
     * @ORM\Column(type="integer")
     */
    private $pageid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $txtblock;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $margin;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $border;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTempID(): ?int
    {
        return $this->tempID;
    }

    public function setTempID(int $tempID): self
    {
        $this->tempID = $tempID;

        return $this;
    }

    public function getPhoto1(): ?int
    {
        return $this->photo1;
    }

    public function setPhoto1(?int $photo1): self
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?int
    {
        return $this->photo2;
    }

    public function setPhoto2(?int $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?int
    {
        return $this->photo3;
    }

    public function setPhoto3(?int $photo3): self
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(?\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    public function setDateupdated(\DateTimeInterface $dateupdated): self
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    public function getOrderid(): ?int
    {
        return $this->orderid;
    }

    public function setOrderid(int $orderid): self
    {
        $this->orderid = $orderid;

        return $this;
    }

    public function getPageid(): ?int
    {
        return $this->pageid;
    }

    public function setPageid(int $pageid): self
    {
        $this->pageid = $pageid;

        return $this;
    }

    public function getTxtblock(): ?string
    {
        return $this->txtblock;
    }

    public function setTxtblock(?string $txtblock): self
    {
        $this->txtblock = $txtblock;

        return $this;
    }

    public function getMargin(): ?string
    {
        return $this->margin;
    }

    public function setMargin(?string $margin): self
    {
        $this->margin = $margin;

        return $this;
    }

    public function getBorder(): ?string
    {
        return $this->border;
    }

    public function setBorder(?string $border): self
    {
        $this->border = $border;

        return $this;
    }
}
