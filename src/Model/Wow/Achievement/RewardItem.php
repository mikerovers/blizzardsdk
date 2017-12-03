<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class RewardItem
{
    private $id;
    private $name;
    private $icon;
    private $quality;
    private $itemLevel;
    private $tooltipParams;
    private $stats = [];
    private $armor;
    private $context;
    private $bonusLists = [];
    private $artifactId;
    private $displayInfoId;
    private $artifactAppearanceId;
    private $artifactTraits= [];
    private $appearance;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RewardItem
     */
    public function setId(int $id): RewardItem
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RewardItem
     */
    public function setName(string $name): RewardItem
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return RewardItem
     */
    public function setIcon(string $icon): RewardItem
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     * @return RewardItem
     */
    public function setQuality(int $quality): RewardItem
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemLevel(): int
    {
        return $this->itemLevel;
    }

    /**
     * @param int $itemLevel
     * @return RewardItem
     */
    public function setItemLevel(int $itemLevel): RewardItem
    {
        $this->itemLevel = $itemLevel;

        return $this;
    }

    /**
     * @return TooltipParams
     */
    public function getTooltipParams(): TooltipParams
    {
        return $this->tooltipParams;
    }

    /**
     * @param TooltipParams $tooltipParams
     * @return RewardItem
     */
    public function setTooltipParams(TooltipParams $tooltipParams): RewardItem
    {
        $this->tooltipParams = $tooltipParams;

        return $this;
    }

    /**
     * @return array
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @param array $stats
     * @return RewardItem
     */
    public function setStats(array $stats): RewardItem
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     * @return RewardItem
     */
    public function setArmor(int $armor): RewardItem
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * @param string $context
     * @return RewardItem
     */
    public function setContext(string $context): RewardItem
    {
        $this->context = $context;

        return $this;
    }

    /**
     * @return array
     */
    public function getBonusLists(): array
    {
        return $this->bonusLists;
    }

    /**
     * @param array $bonusLists
     * @return RewardItem
     */
    public function setBonusLists(array $bonusLists): RewardItem
    {
        $this->bonusLists = $bonusLists;

        return $this;
    }

    /**
     * @return int
     */
    public function getArtifactId(): int
    {
        return $this->artifactId;
    }

    /**
     * @param int $artifactId
     * @return RewardItem
     */
    public function setArtifactId(int $artifactId): RewardItem
    {
        $this->artifactId = $artifactId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayInfoId(): int
    {
        return $this->displayInfoId;
    }

    /**
     * @param int $displayInfoId
     * @return RewardItem
     */
    public function setDisplayInfoId(int $displayInfoId): RewardItem
    {
        $this->displayInfoId = $displayInfoId;

        return $this;
    }

    /**
     * @return int
     */
    public function getArtifactAppearanceId(): int
    {
        return $this->artifactAppearanceId;
    }

    /**
     * @param int $artifactAppearanceId
     * @return RewardItem
     */
    public function setArtifactAppearanceId(int $artifactAppearanceId): RewardItem
    {
        $this->artifactAppearanceId = $artifactAppearanceId;

        return $this;
    }

    /**
     * @return array
     */
    public function getArtifactTraits(): array
    {
        return $this->artifactTraits;
    }

    /**
     * @param array $artifactTraits
     * @return RewardItem
     */
    public function setArtifactTraits(array $artifactTraits): RewardItem
    {
        $this->artifactTraits = $artifactTraits;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * @param $appearance
     * @return RewardItem
     */
    public function setAppearance($appearance): RewardItem
    {
        $this->appearance = $appearance;

        return $this;
    }
}
