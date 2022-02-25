<?php

namespace App\Entity;

use App\Repository\SlidersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SlidersRepository::class)
 */
class Sliders
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
    private $sliderof;

    /**
     * @ORM\Column(type="integer")
     */
    private $slides;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreated;

    /**
     * @ORM\Column(type="integer")
     */
    private $slidergroup;

    /**
     * @ORM\Column(type="integer")
     */
    private $photoorder;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $capt;

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
    private $text_location;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $bg_opacity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $font_size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $font;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateupdated;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $txt_bg_height;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pager;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $transition;

    /**
     * @ORM\Column(type="integer")
     */
    private $showby;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $popup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSliderof(): ?int
    {
        return $this->sliderof;
    }

    public function setSliderof(int $sliderof): self
    {
        $this->sliderof = $sliderof;

        return $this;
    }

    public function getSlides(): ?int
    {
        return $this->slides;
    }

    public function setSlides(int $slides): self
    {
        $this->slides = $slides;

        return $this;
    }

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getSlidergroup(): ?int
    {
        return $this->slidergroup;
    }

    public function setSlidergroup(int $slidergroup): self
    {
        $this->slidergroup = $slidergroup;

        return $this;
    }

    public function getPhotoorder(): ?int
    {
        return $this->photoorder;
    }

    public function setPhotoorder(int $photoorder): self
    {
        $this->photoorder = $photoorder;

        return $this;
    }

    public function getCapt(): ?string
    {
        return $this->capt;
    }

    public function setCapt(?string $capt): self
    {
        $this->capt = $capt;

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

    public function getTextLocation(): ?string
    {
        return $this->text_location;
    }

    public function setTextLocation(?string $text_location): self
    {
        $this->text_location = $text_location;

        return $this;
    }

    public function getBgOpacity(): ?string
    {
        return $this->bg_opacity;
    }

    public function setBgOpacity(?string $bg_opacity): self
    {
        $this->bg_opacity = $bg_opacity;

        return $this;
    }

    public function getFontSize(): ?int
    {
        return $this->font_size;
    }

    public function setFontSize(?int $font_size): self
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

    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    public function setDateupdated(?\DateTimeInterface $dateupdated): self
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    public function getTxtBgHeight(): ?string
    {
        return $this->txt_bg_height;
    }

    public function setTxtBgHeight(?string $txt_bg_height): self
    {
        $this->txt_bg_height = $txt_bg_height;

        return $this;
    }

    public function getPager(): ?bool
    {
        return $this->pager;
    }

    public function setPager(bool $pager): self
    {
        $this->pager = $pager;

        return $this;
    }

    public function getTransition(): ?string
    {
        return $this->transition;
    }

    public function setTransition(?string $transition): self
    {
        $this->transition = $transition;

        return $this;
    }

    public function getShowby(): ?int
    {
        return $this->showby;
    }

    public function setShowby(int $showby): self
    {
        $this->showby = $showby;

        return $this;
    }

    public function getPopup(): ?bool
    {
        return $this->popup;
    }

    public function setPopup(?bool $popup): self
    {
        $this->popup = $popup;

        return $this;
    }
}
