<?php

namespace MR\BlizzardSdk\Model\Wow;

class GuildEmblem
{
    private $icon;
    private $iconColor;
    private $iconColorId;
    private $border;
    private $borderColor;
    private $borderColorId;
    private $backgroundColor;
    private $backgroundColorId;

    /**
     * @return int
     */
    public function getIcon(): int
    {
        return $this->icon;
    }

    /**
     * @param int $icon
     *
     * @return GuildEmblem
     */
    public function setIcon(int $icon): GuildEmblem
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconColor(): string
    {
        return $this->iconColor;
    }

    /**
     * @param string $iconColor
     *
     * @return GuildEmblem
     */
    public function setIconColor(string $iconColor): GuildEmblem
    {
        $this->iconColor = $iconColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getIconColorId(): int
    {
        return $this->iconColorId;
    }

    /**
     * @param int $iconColorId
     *
     * @return GuildEmblem
     */
    public function setIconColorId(int $iconColorId): GuildEmblem
    {
        $this->iconColorId = $iconColorId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorder(): int
    {
        return $this->border;
    }

    /**
     * @param int $border
     *
     * @return GuildEmblem
     */
    public function setBorder(int $border): GuildEmblem
    {
        $this->border = $border;

        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor(): string
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     *
     * @return GuildEmblem
     */
    public function setBorderColor(string $borderColor): GuildEmblem
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorderColorId(): int
    {
        return $this->borderColorId;
    }

    /**
     * @param int $borderColorId
     *
     * @return GuildEmblem
     */
    public function setBorderColorId(int $borderColorId): GuildEmblem
    {
        $this->borderColorId = $borderColorId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     *
     * @return GuildEmblem
     */
    public function setBackgroundColor(string $backgroundColor): GuildEmblem
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return int
     */
    public function getBackgroundColorId(): int
    {
        return $this->backgroundColorId;
    }

    /**
     * @param int $backgroundColorId
     *
     * @return GuildEmblem
     */
    public function setBackgroundColorId(int $backgroundColorId): GuildEmblem
    {
        $this->backgroundColorId = $backgroundColorId;

        return $this;
    }
}