<?php

namespace App\Entity;

use App\Repository\CaptionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CaptionsRepository::class)
 */
class Captions
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $caption;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $text_color;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $bg_color;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $test_location;

    /**
     * @ORM\Column(type="decimal", precision=3, scale=2)
     */
    private $bg_opacity;

    /**
     * @ORM\Column(type="integer")
     */
    private $font_size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $font;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateadded;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateupdated;

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

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(?string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(?string $text_color): self
    {
        $this->text_color = $text_color;

        return $this;
    }

    public function getBgColor(): ?string
    {
        return $this->bg_color;
    }

    public function setBgColor(?string $bg_color): self
    {
        $this->bg_color = $bg_color;

        return $this;
    }

    public function getTestLocation(): ?string
    {
        return $this->test_location;
    }

    public function setTestLocation(?string $test_location): self
    {
        $this->test_location = $test_location;

        return $this;
    }

    public function getBgOpacity(): ?string
    {
        return $this->bg_opacity;
    }

    public function setBgOpacity(string $bg_opacity): self
    {
        $this->bg_opacity = $bg_opacity;

        return $this;
    }

    public function getFontSize(): ?int
    {
        return $this->font_size;
    }

    public function setFontSize(int $font_size): self
    {
        $this->font_size = $font_size;

        return $this;
    }

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function setFont(?string $font): self
    {
        $this->font = $font;

        return $this;
    }

    public function getDateadded(): ?\DateTimeInterface
    {
        return $this->dateadded;
    }

    public function setDateadded(\DateTimeInterface $dateadded): self
    {
        $this->dateadded = $dateadded;

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
}
