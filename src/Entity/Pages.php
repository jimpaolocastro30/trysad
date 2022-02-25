<?php

namespace App\Entity;

use App\Repository\PagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PagesRepository::class)
 */
class Pages
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
    private $page_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $page_description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreated;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateupdated;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $page_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $show_header;

    /**
     * @ORM\Column(type="integer")
     */
    private $is_published;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $menu_order;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $photoid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $header_text;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoPosition;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $menPosition;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $headerWidth;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $sloganPosition;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $sloganColor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sloganFont;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $navFont;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $switch;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $rightAlign;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $default_nav_bar_size;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $leftAlign;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $navColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $navFontColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoPositionVertical;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoLocation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $croppedPhoto;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $headerHeight;

    /**
     * @ORM\Column(type="integer")
     */
    private $topBar;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $topBarColor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position_x;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position_y;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $image_x;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $image_h;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position_x2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position_y2;

    /**
     * @ORM\Column(type="integer")
     */
    private $has_header_photo;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $bgcolor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $colorBetween;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $sideColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $rsideColor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sidesOption;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dofilters;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $useicon;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $slogansize;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $rowTopMargin;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $rowLeftMargin;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $rowRightMargin;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $topRowColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $LeftColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $RightColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $topBarSize;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoBarColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoTextColor;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $menuVertical;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $logoSize;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $mobileLogoMenuCentered;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $mobileMenuBold;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $logoVersion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $toggleSocialIcons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $socialShowIn;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $socialSize;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custom_fb_icon_header;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custom_twitter_icon_header;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custom_instagram_icon_header;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custom_youtube_icon_header;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $custom_pinterest_icon_header;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fbPage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitterPage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instaPage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ytPage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pinPage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $socialLocation;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $socialPosition;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_size;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_color;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_icons;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_icon_size;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_social_pos;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $footer_social_vert;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showFbOnTop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showTwitterOnTop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showInstaOnTop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showYtOnTop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showPinOnTop;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showFbOnFoot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showTwitterOnFoot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showInstaOnFoot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showYtOnFoot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $showPinOnFoot;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $icon_set_up;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $icon_set_top;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $icon_color_top;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $icon_set_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $icon_color_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $custom_fb_icon_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $custom_twitter_icon_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $custom_instagram_icon_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $custom_youtube_icon_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $custom_pinterest_icon_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fb_icon_header;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $twitter_icon_header;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $instagram_icon_header;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $youtube_icon_header;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pinterest_icon_header;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fb_icon_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $twitter_icon_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $instagram_icon_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $youtube_icon_footer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pinterest_icon_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $fb_icon_color_header;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $twitter_icon_color_header;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $instagram_icon_color_header;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $youtube_icon_color_header;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $pinterest_icon_color_header;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $fb_icon_color_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $twitter_icon_color_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $instagram_icon_color_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $youtube_icon_color_footer;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $pinterest_icon_color_footer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $navFontSize;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageTitle(): ?string
    {
        return $this->page_title;
    }

    public function setPageTitle(string $page_title): self
    {
        $this->page_title = $page_title;

        return $this;
    }

    public function getPageDescription(): ?string
    {
        return $this->page_description;
    }

    public function setPageDescription(string $page_description): self
    {
        $this->page_description = $page_description;

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

    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    public function setDateupdated(\DateTimeInterface $dateupdated): self
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    public function getPageName(): ?string
    {
        return $this->page_name;
    }

    public function setPageName(string $page_name): self
    {
        $this->page_name = $page_name;

        return $this;
    }

    public function getShowHeader(): ?int
    {
        return $this->show_header;
    }

    public function setShowHeader(int $show_header): self
    {
        $this->show_header = $show_header;

        return $this;
    }

    public function getIsPublished(): ?int
    {
        return $this->is_published;
    }

    public function setIsPublished(int $is_published): self
    {
        $this->is_published = $is_published;

        return $this;
    }

    public function getMenuOrder(): ?int
    {
        return $this->menu_order;
    }

    public function setMenuOrder(?int $menu_order): self
    {
        $this->menu_order = $menu_order;

        return $this;
    }

    public function getPhotoid(): ?int
    {
        return $this->photoid;
    }

    public function setPhotoid(?int $photoid): self
    {
        $this->photoid = $photoid;

        return $this;
    }

    public function getHeaderText(): ?string
    {
        return $this->header_text;
    }

    public function setHeaderText(?string $header_text): self
    {
        $this->header_text = $header_text;

        return $this;
    }

    public function getLogoPosition(): ?string
    {
        return $this->logoPosition;
    }

    public function setLogoPosition(?string $logoPosition): self
    {
        $this->logoPosition = $logoPosition;

        return $this;
    }

    public function getMenPosition(): ?string
    {
        return $this->menPosition;
    }

    public function setMenPosition(?string $menPosition): self
    {
        $this->menPosition = $menPosition;

        return $this;
    }

    public function getHeaderWidth(): ?string
    {
        return $this->headerWidth;
    }

    public function setHeaderWidth(?string $headerWidth): self
    {
        $this->headerWidth = $headerWidth;

        return $this;
    }

    public function getSloganPosition(): ?string
    {
        return $this->sloganPosition;
    }

    public function setSloganPosition(?string $sloganPosition): self
    {
        $this->sloganPosition = $sloganPosition;

        return $this;
    }

    public function getSloganColor(): ?string
    {
        return $this->sloganColor;
    }

    public function setSloganColor(?string $sloganColor): self
    {
        $this->sloganColor = $sloganColor;

        return $this;
    }

    public function getSloganFont(): ?string
    {
        return $this->sloganFont;
    }

    public function setSloganFont(?string $sloganFont): self
    {
        $this->sloganFont = $sloganFont;

        return $this;
    }

    public function getNavFont(): ?string
    {
        return $this->navFont;
    }

    public function setNavFont(?string $navFont): self
    {
        $this->navFont = $navFont;

        return $this;
    }

    public function getSwitch(): ?int
    {
        return $this->switch;
    }

    public function setSwitch(?int $switch): self
    {
        $this->switch = $switch;

        return $this;
    }

    public function getRightAlign(): ?string
    {
        return $this->rightAlign;
    }

    public function setRightAlign(?string $rightAlign): self
    {
        $this->rightAlign = $rightAlign;

        return $this;
    }

    public function getDefaultNavBarSize(): ?string
    {
        return $this->default_nav_bar_size;
    }

    public function setDefaultNavBarSize(?string $default_nav_bar_size): self
    {
        $this->default_nav_bar_size = $default_nav_bar_size;

        return $this;
    }

    public function getLeftAlign(): ?string
    {
        return $this->leftAlign;
    }

    public function setLeftAlign(?string $leftAlign): self
    {
        $this->leftAlign = $leftAlign;

        return $this;
    }

    public function getNavColor(): ?string
    {
        return $this->navColor;
    }

    public function setNavColor(?string $navColor): self
    {
        $this->navColor = $navColor;

        return $this;
    }

    public function getNavFontColor(): ?string
    {
        return $this->navFontColor;
    }

    public function setNavFontColor(?string $navFontColor): self
    {
        $this->navFontColor = $navFontColor;

        return $this;
    }

    public function getLogoPositionVertical(): ?string
    {
        return $this->logoPositionVertical;
    }

    public function setLogoPositionVertical(?string $logoPositionVertical): self
    {
        $this->logoPositionVertical = $logoPositionVertical;

        return $this;
    }

    public function getLogoLocation(): ?string
    {
        return $this->logoLocation;
    }

    public function setLogoLocation(?string $logoLocation): self
    {
        $this->logoLocation = $logoLocation;

        return $this;
    }

    public function getCroppedPhoto(): ?int
    {
        return $this->croppedPhoto;
    }

    public function setCroppedPhoto(?int $croppedPhoto): self
    {
        $this->croppedPhoto = $croppedPhoto;

        return $this;
    }

    public function getHeaderHeight(): ?string
    {
        return $this->headerHeight;
    }

    public function setHeaderHeight(?string $headerHeight): self
    {
        $this->headerHeight = $headerHeight;

        return $this;
    }

    public function getTopBar(): ?int
    {
        return $this->topBar;
    }

    public function setTopBar(int $topBar): self
    {
        $this->topBar = $topBar;

        return $this;
    }

    public function getTopBarColor(): ?string
    {
        return $this->topBarColor;
    }

    public function setTopBarColor(?string $topBarColor): self
    {
        $this->topBarColor = $topBarColor;

        return $this;
    }

    public function getPositionX(): ?int
    {
        return $this->position_x;
    }

    public function setPositionX(?int $position_x): self
    {
        $this->position_x = $position_x;

        return $this;
    }

    public function getPositionY(): ?int
    {
        return $this->position_y;
    }

    public function setPositionY(?int $position_y): self
    {
        $this->position_y = $position_y;

        return $this;
    }

    public function getImageX(): ?int
    {
        return $this->image_x;
    }

    public function setImageX(?int $image_x): self
    {
        $this->image_x = $image_x;

        return $this;
    }

    public function getImageH(): ?int
    {
        return $this->image_h;
    }

    public function setImageH(?int $image_h): self
    {
        $this->image_h = $image_h;

        return $this;
    }

    public function getPositionX2(): ?int
    {
        return $this->position_x2;
    }

    public function setPositionX2(?int $position_x2): self
    {
        $this->position_x2 = $position_x2;

        return $this;
    }

    public function getPositionY2(): ?int
    {
        return $this->position_y2;
    }

    public function setPositionY2(?int $position_y2): self
    {
        $this->position_y2 = $position_y2;

        return $this;
    }

    public function getHasHeaderPhoto(): ?int
    {
        return $this->has_header_photo;
    }

    public function setHasHeaderPhoto(int $has_header_photo): self
    {
        $this->has_header_photo = $has_header_photo;

        return $this;
    }

    public function getBgcolor(): ?string
    {
        return $this->bgcolor;
    }

    public function setBgcolor(?string $bgcolor): self
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    public function getColorBetween(): ?string
    {
        return $this->colorBetween;
    }

    public function setColorBetween(?string $colorBetween): self
    {
        $this->colorBetween = $colorBetween;

        return $this;
    }

    public function getSideColor(): ?string
    {
        return $this->sideColor;
    }

    public function setSideColor(?string $sideColor): self
    {
        $this->sideColor = $sideColor;

        return $this;
    }

    public function getRsideColor(): ?string
    {
        return $this->rsideColor;
    }

    public function setRsideColor(?string $rsideColor): self
    {
        $this->rsideColor = $rsideColor;

        return $this;
    }

    public function getSidesOption(): ?int
    {
        return $this->sidesOption;
    }

    public function setSidesOption(?int $sidesOption): self
    {
        $this->sidesOption = $sidesOption;

        return $this;
    }

    public function getDofilters(): ?int
    {
        return $this->dofilters;
    }

    public function setDofilters(?int $dofilters): self
    {
        $this->dofilters = $dofilters;

        return $this;
    }

    public function getUseicon(): ?int
    {
        return $this->useicon;
    }

    public function setUseicon(?int $useicon): self
    {
        $this->useicon = $useicon;

        return $this;
    }

    public function getSlogansize(): ?string
    {
        return $this->slogansize;
    }

    public function setSlogansize(?string $slogansize): self
    {
        $this->slogansize = $slogansize;

        return $this;
    }

    public function getRowTopMargin(): ?string
    {
        return $this->rowTopMargin;
    }

    public function setRowTopMargin(?string $rowTopMargin): self
    {
        $this->rowTopMargin = $rowTopMargin;

        return $this;
    }

    public function getRowLeftMargin(): ?string
    {
        return $this->rowLeftMargin;
    }

    public function setRowLeftMargin(?string $rowLeftMargin): self
    {
        $this->rowLeftMargin = $rowLeftMargin;

        return $this;
    }

    public function getRowRightMargin(): ?string
    {
        return $this->rowRightMargin;
    }

    public function setRowRightMargin(?string $rowRightMargin): self
    {
        $this->rowRightMargin = $rowRightMargin;

        return $this;
    }

    public function getTopRowColor(): ?string
    {
        return $this->topRowColor;
    }

    public function setTopRowColor(?string $topRowColor): self
    {
        $this->topRowColor = $topRowColor;

        return $this;
    }

    public function getLeftColor(): ?string
    {
        return $this->LeftColor;
    }

    public function setLeftColor(?string $LeftColor): self
    {
        $this->LeftColor = $LeftColor;

        return $this;
    }

    public function getRightColor(): ?string
    {
        return $this->RightColor;
    }

    public function setRightColor(?string $RightColor): self
    {
        $this->RightColor = $RightColor;

        return $this;
    }

    public function getTopBarSize(): ?string
    {
        return $this->topBarSize;
    }

    public function setTopBarSize(?string $topBarSize): self
    {
        $this->topBarSize = $topBarSize;

        return $this;
    }

    public function getLogoBarColor(): ?string
    {
        return $this->logoBarColor;
    }

    public function setLogoBarColor(?string $logoBarColor): self
    {
        $this->logoBarColor = $logoBarColor;

        return $this;
    }

    public function getLogoTextColor(): ?string
    {
        return $this->logoTextColor;
    }

    public function setLogoTextColor(?string $logoTextColor): self
    {
        $this->logoTextColor = $logoTextColor;

        return $this;
    }

    public function getMenuVertical(): ?string
    {
        return $this->menuVertical;
    }

    public function setMenuVertical(?string $menuVertical): self
    {
        $this->menuVertical = $menuVertical;

        return $this;
    }

    public function getLogoSize(): ?string
    {
        return $this->logoSize;
    }

    public function setLogoSize(?string $logoSize): self
    {
        $this->logoSize = $logoSize;

        return $this;
    }

    public function getMobileLogoMenuCentered(): ?string
    {
        return $this->mobileLogoMenuCentered;
    }

    public function setMobileLogoMenuCentered(?string $mobileLogoMenuCentered): self
    {
        $this->mobileLogoMenuCentered = $mobileLogoMenuCentered;

        return $this;
    }

    public function getMobileMenuBold(): ?string
    {
        return $this->mobileMenuBold;
    }

    public function setMobileMenuBold(?string $mobileMenuBold): self
    {
        $this->mobileMenuBold = $mobileMenuBold;

        return $this;
    }

    public function getLogoVersion(): ?string
    {
        return $this->logoVersion;
    }

    public function setLogoVersion(?string $logoVersion): self
    {
        $this->logoVersion = $logoVersion;

        return $this;
    }

    public function getToggleSocialIcons(): ?int
    {
        return $this->toggleSocialIcons;
    }

    public function setToggleSocialIcons(?int $toggleSocialIcons): self
    {
        $this->toggleSocialIcons = $toggleSocialIcons;

        return $this;
    }

    public function getSocialShowIn(): ?int
    {
        return $this->socialShowIn;
    }

    public function setSocialShowIn(?int $socialShowIn): self
    {
        $this->socialShowIn = $socialShowIn;

        return $this;
    }

    public function getSocialSize(): ?string
    {
        return $this->socialSize;
    }

    public function setSocialSize(?string $socialSize): self
    {
        $this->socialSize = $socialSize;

        return $this;
    }

    public function getCustomFbIconHeader(): ?string
    {
        return $this->custom_fb_icon_header;
    }

    public function setCustomFbIconHeader(?string $custom_fb_icon_header): self
    {
        $this->custom_fb_icon_header = $custom_fb_icon_header;

        return $this;
    }

    public function getCustomTwitterIconHeader(): ?string
    {
        return $this->custom_twitter_icon_header;
    }

    public function setCustomTwitterIconHeader(?string $custom_twitter_icon_header): self
    {
        $this->custom_twitter_icon_header = $custom_twitter_icon_header;

        return $this;
    }

    public function getCustomInstagramIconHeader(): ?string
    {
        return $this->custom_instagram_icon_header;
    }

    public function setCustomInstagramIconHeader(?string $custom_instagram_icon_header): self
    {
        $this->custom_instagram_icon_header = $custom_instagram_icon_header;

        return $this;
    }

    public function getCustomYoutubeIconHeader(): ?string
    {
        return $this->custom_youtube_icon_header;
    }

    public function setCustomYoutubeIconHeader(?string $custom_youtube_icon_header): self
    {
        $this->custom_youtube_icon_header = $custom_youtube_icon_header;

        return $this;
    }

    public function getCustomPinterestIconHeader(): ?string
    {
        return $this->custom_pinterest_icon_header;
    }

    public function setCustomPinterestIconHeader(?string $custom_pinterest_icon_header): self
    {
        $this->custom_pinterest_icon_header = $custom_pinterest_icon_header;

        return $this;
    }

    public function getFbPage(): ?string
    {
        return $this->fbPage;
    }

    public function setFbPage(?string $fbPage): self
    {
        $this->fbPage = $fbPage;

        return $this;
    }

    public function getTwitterPage(): ?string
    {
        return $this->twitterPage;
    }

    public function setTwitterPage(?string $twitterPage): self
    {
        $this->twitterPage = $twitterPage;

        return $this;
    }

    public function getInstaPage(): ?string
    {
        return $this->instaPage;
    }

    public function setInstaPage(?string $instaPage): self
    {
        $this->instaPage = $instaPage;

        return $this;
    }

    public function getYtPage(): ?string
    {
        return $this->ytPage;
    }

    public function setYtPage(?string $ytPage): self
    {
        $this->ytPage = $ytPage;

        return $this;
    }

    public function getPinPage(): ?string
    {
        return $this->pinPage;
    }

    public function setPinPage(?string $pinPage): self
    {
        $this->pinPage = $pinPage;

        return $this;
    }

    public function getSocialLocation(): ?string
    {
        return $this->socialLocation;
    }

    public function setSocialLocation(?string $socialLocation): self
    {
        $this->socialLocation = $socialLocation;

        return $this;
    }

    public function getSocialPosition(): ?string
    {
        return $this->socialPosition;
    }

    public function setSocialPosition(?string $socialPosition): self
    {
        $this->socialPosition = $socialPosition;

        return $this;
    }

    public function getFooterSize(): ?string
    {
        return $this->footer_size;
    }

    public function setFooterSize(?string $footer_size): self
    {
        $this->footer_size = $footer_size;

        return $this;
    }

    public function getFooterColor(): ?string
    {
        return $this->footer_color;
    }

    public function setFooterColor(?string $footer_color): self
    {
        $this->footer_color = $footer_color;

        return $this;
    }

    public function getFooterIcons(): ?string
    {
        return $this->footer_icons;
    }

    public function setFooterIcons(?string $footer_icons): self
    {
        $this->footer_icons = $footer_icons;

        return $this;
    }

    public function getFooterIconSize(): ?string
    {
        return $this->footer_icon_size;
    }

    public function setFooterIconSize(?string $footer_icon_size): self
    {
        $this->footer_icon_size = $footer_icon_size;

        return $this;
    }

    public function getFooterSocialPos(): ?string
    {
        return $this->footer_social_pos;
    }

    public function setFooterSocialPos(?string $footer_social_pos): self
    {
        $this->footer_social_pos = $footer_social_pos;

        return $this;
    }

    public function getFooterSocialVert(): ?string
    {
        return $this->footer_social_vert;
    }

    public function setFooterSocialVert(?string $footer_social_vert): self
    {
        $this->footer_social_vert = $footer_social_vert;

        return $this;
    }

    public function getShowFbOnTop(): ?int
    {
        return $this->showFbOnTop;
    }

    public function setShowFbOnTop(?int $showFbOnTop): self
    {
        $this->showFbOnTop = $showFbOnTop;

        return $this;
    }

    public function getShowTwitterOnTop(): ?int
    {
        return $this->showTwitterOnTop;
    }

    public function setShowTwitterOnTop(?int $showTwitterOnTop): self
    {
        $this->showTwitterOnTop = $showTwitterOnTop;

        return $this;
    }

    public function getShowInstaOnTop(): ?int
    {
        return $this->showInstaOnTop;
    }

    public function setShowInstaOnTop(?int $showInstaOnTop): self
    {
        $this->showInstaOnTop = $showInstaOnTop;

        return $this;
    }

    public function getShowYtOnTop(): ?int
    {
        return $this->showYtOnTop;
    }

    public function setShowYtOnTop(?int $showYtOnTop): self
    {
        $this->showYtOnTop = $showYtOnTop;

        return $this;
    }

    public function getShowPinOnTop(): ?int
    {
        return $this->showPinOnTop;
    }

    public function setShowPinOnTop(?int $showPinOnTop): self
    {
        $this->showPinOnTop = $showPinOnTop;

        return $this;
    }

    public function getShowFbOnFoot(): ?int
    {
        return $this->showFbOnFoot;
    }

    public function setShowFbOnFoot(?int $showFbOnFoot): self
    {
        $this->showFbOnFoot = $showFbOnFoot;

        return $this;
    }

    public function getShowTwitterOnFoot(): ?int
    {
        return $this->showTwitterOnFoot;
    }

    public function setShowTwitterOnFoot(?int $showTwitterOnFoot): self
    {
        $this->showTwitterOnFoot = $showTwitterOnFoot;

        return $this;
    }

    public function getShowInstaOnFoot(): ?int
    {
        return $this->showInstaOnFoot;
    }

    public function setShowInstaOnFoot(?int $showInstaOnFoot): self
    {
        $this->showInstaOnFoot = $showInstaOnFoot;

        return $this;
    }

    public function getShowYtOnFoot(): ?int
    {
        return $this->showYtOnFoot;
    }

    public function setShowYtOnFoot(?int $showYtOnFoot): self
    {
        $this->showYtOnFoot = $showYtOnFoot;

        return $this;
    }

    public function getShowPinOnFoot(): ?int
    {
        return $this->showPinOnFoot;
    }

    public function setShowPinOnFoot(?int $showPinOnFoot): self
    {
        $this->showPinOnFoot = $showPinOnFoot;

        return $this;
    }

    public function getIconSetUp(): ?int
    {
        return $this->icon_set_up;
    }

    public function setIconSetUp(?int $icon_set_up): self
    {
        $this->icon_set_up = $icon_set_up;

        return $this;
    }

    public function getIconSetTop(): ?int
    {
        return $this->icon_set_top;
    }

    public function setIconSetTop(?int $icon_set_top): self
    {
        $this->icon_set_top = $icon_set_top;

        return $this;
    }

    public function getIconColorTop(): ?string
    {
        return $this->icon_color_top;
    }

    public function setIconColorTop(?string $icon_color_top): self
    {
        $this->icon_color_top = $icon_color_top;

        return $this;
    }

    public function getIconSetFooter(): ?int
    {
        return $this->icon_set_footer;
    }

    public function setIconSetFooter(?int $icon_set_footer): self
    {
        $this->icon_set_footer = $icon_set_footer;

        return $this;
    }

    public function getIconColorFooter(): ?int
    {
        return $this->icon_color_footer;
    }

    public function setIconColorFooter(?int $icon_color_footer): self
    {
        $this->icon_color_footer = $icon_color_footer;

        return $this;
    }

    public function getCustomFbIconFooter(): ?string
    {
        return $this->custom_fb_icon_footer;
    }

    public function setCustomFbIconFooter(?string $custom_fb_icon_footer): self
    {
        $this->custom_fb_icon_footer = $custom_fb_icon_footer;

        return $this;
    }

    public function getCustomTwitterIconFooter(): ?string
    {
        return $this->custom_twitter_icon_footer;
    }

    public function setCustomTwitterIconFooter(?string $custom_twitter_icon_footer): self
    {
        $this->custom_twitter_icon_footer = $custom_twitter_icon_footer;

        return $this;
    }

    public function getCustomInstagramIconFooter(): ?string
    {
        return $this->custom_instagram_icon_footer;
    }

    public function setCustomInstagramIconFooter(?string $custom_instagram_icon_footer): self
    {
        $this->custom_instagram_icon_footer = $custom_instagram_icon_footer;

        return $this;
    }

    public function getCustomYoutubeIconFooter(): ?string
    {
        return $this->custom_youtube_icon_footer;
    }

    public function setCustomYoutubeIconFooter(?string $custom_youtube_icon_footer): self
    {
        $this->custom_youtube_icon_footer = $custom_youtube_icon_footer;

        return $this;
    }

    public function getCustomPinterestIconFooter(): ?string
    {
        return $this->custom_pinterest_icon_footer;
    }

    public function setCustomPinterestIconFooter(?string $custom_pinterest_icon_footer): self
    {
        $this->custom_pinterest_icon_footer = $custom_pinterest_icon_footer;

        return $this;
    }

    public function getFbIconHeader(): ?int
    {
        return $this->fb_icon_header;
    }

    public function setFbIconHeader(?int $fb_icon_header): self
    {
        $this->fb_icon_header = $fb_icon_header;

        return $this;
    }

    public function getTwitterIconHeader(): ?int
    {
        return $this->twitter_icon_header;
    }

    public function setTwitterIconHeader(?int $twitter_icon_header): self
    {
        $this->twitter_icon_header = $twitter_icon_header;

        return $this;
    }

    public function getInstagramIconHeader(): ?int
    {
        return $this->instagram_icon_header;
    }

    public function setInstagramIconHeader(?int $instagram_icon_header): self
    {
        $this->instagram_icon_header = $instagram_icon_header;

        return $this;
    }

    public function getYoutubeIconHeader(): ?int
    {
        return $this->youtube_icon_header;
    }

    public function setYoutubeIconHeader(?int $youtube_icon_header): self
    {
        $this->youtube_icon_header = $youtube_icon_header;

        return $this;
    }

    public function getPinterestIconHeader(): ?int
    {
        return $this->pinterest_icon_header;
    }

    public function setPinterestIconHeader(?int $pinterest_icon_header): self
    {
        $this->pinterest_icon_header = $pinterest_icon_header;

        return $this;
    }

    public function getFbIconFooter(): ?int
    {
        return $this->fb_icon_footer;
    }

    public function setFbIconFooter(?int $fb_icon_footer): self
    {
        $this->fb_icon_footer = $fb_icon_footer;

        return $this;
    }

    public function getTwitterIconFooter(): ?int
    {
        return $this->twitter_icon_footer;
    }

    public function setTwitterIconFooter(?int $twitter_icon_footer): self
    {
        $this->twitter_icon_footer = $twitter_icon_footer;

        return $this;
    }

    public function getInstagramIconFooter(): ?int
    {
        return $this->instagram_icon_footer;
    }

    public function setInstagramIconFooter(?int $instagram_icon_footer): self
    {
        $this->instagram_icon_footer = $instagram_icon_footer;

        return $this;
    }

    public function getYoutubeIconFooter(): ?int
    {
        return $this->youtube_icon_footer;
    }

    public function setYoutubeIconFooter(?int $youtube_icon_footer): self
    {
        $this->youtube_icon_footer = $youtube_icon_footer;

        return $this;
    }

    public function getPinterestIconFooter(): ?int
    {
        return $this->pinterest_icon_footer;
    }

    public function setPinterestIconFooter(?int $pinterest_icon_footer): self
    {
        $this->pinterest_icon_footer = $pinterest_icon_footer;

        return $this;
    }

    public function getFbIconColorHeader(): ?string
    {
        return $this->fb_icon_color_header;
    }

    public function setFbIconColorHeader(?string $fb_icon_color_header): self
    {
        $this->fb_icon_color_header = $fb_icon_color_header;

        return $this;
    }

    public function getTwitterIconColorHeader(): ?string
    {
        return $this->twitter_icon_color_header;
    }

    public function setTwitterIconColorHeader(?string $twitter_icon_color_header): self
    {
        $this->twitter_icon_color_header = $twitter_icon_color_header;

        return $this;
    }

    public function getInstagramIconColorHeader(): ?string
    {
        return $this->instagram_icon_color_header;
    }

    public function setInstagramIconColorHeader(?string $instagram_icon_color_header): self
    {
        $this->instagram_icon_color_header = $instagram_icon_color_header;

        return $this;
    }

    public function getYoutubeIconColorHeader(): ?string
    {
        return $this->youtube_icon_color_header;
    }

    public function setYoutubeIconColorHeader(?string $youtube_icon_color_header): self
    {
        $this->youtube_icon_color_header = $youtube_icon_color_header;

        return $this;
    }

    public function getPinterestIconColorHeader(): ?string
    {
        return $this->pinterest_icon_color_header;
    }

    public function setPinterestIconColorHeader(?string $pinterest_icon_color_header): self
    {
        $this->pinterest_icon_color_header = $pinterest_icon_color_header;

        return $this;
    }

    public function getFbIconColorFooter(): ?string
    {
        return $this->fb_icon_color_footer;
    }

    public function setFbIconColorFooter(?string $fb_icon_color_footer): self
    {
        $this->fb_icon_color_footer = $fb_icon_color_footer;

        return $this;
    }

    public function getTwitterIconColorFooter(): ?string
    {
        return $this->twitter_icon_color_footer;
    }

    public function setTwitterIconColorFooter(?string $twitter_icon_color_footer): self
    {
        $this->twitter_icon_color_footer = $twitter_icon_color_footer;

        return $this;
    }

    public function getInstagramIconColorFooter(): ?string
    {
        return $this->instagram_icon_color_footer;
    }

    public function setInstagramIconColorFooter(?string $instagram_icon_color_footer): self
    {
        $this->instagram_icon_color_footer = $instagram_icon_color_footer;

        return $this;
    }

    public function getYoutubeIconColorFooter(): ?string
    {
        return $this->youtube_icon_color_footer;
    }

    public function setYoutubeIconColorFooter(?string $youtube_icon_color_footer): self
    {
        $this->youtube_icon_color_footer = $youtube_icon_color_footer;

        return $this;
    }

    public function getPinterestIconColorFooter(): ?string
    {
        return $this->pinterest_icon_color_footer;
    }

    public function setPinterestIconColorFooter(?string $pinterest_icon_color_footer): self
    {
        $this->pinterest_icon_color_footer = $pinterest_icon_color_footer;

        return $this;
    }

    public function getNavFontSize(): ?string
    {
        return $this->navFontSize;
    }

    public function setNavFontSize(?string $navFontSize): self
    {
        $this->navFontSize = $navFontSize;

        return $this;
    }
}
