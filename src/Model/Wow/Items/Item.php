<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

use MR\BlizzardSdk\Model\Wow\Items\Weapon\WeaponInfo;

class Item
{
    private $id;
    private $disenchantingSkillRank;
    private $description;
    private $name;
    private $icon;
    private $stackable;
    private $itemBind;
    private $bonusStats = [];
    private $itemSpells = [];
    private $itemClass;
    private $itemSubClass;
    private $containerSlots;
    private $weaponInfo;
    private $intentoryType;
    private $equippable;
    private $itemLevel;
    private $maxCount;
    private $maxDurability;
    private $minFactionId;
    private $minReputation;
    private $quality;
    private $sellPrice;
    private $requiredSkill;
    private $requiredLevel;
    private $itemSource;
    private $baseArmor;
    private $hasSockets;
    private $isAuctionable;
    private $armor;
    private $displayInfoId;
    private $nameDescription;
    private $nameDescriptionColor;
    private $upgradable;
    private $heroicTooltip;
    private $context;
    private $bonusLists = [];
    private $availableContexts = [];
    private $bonusSummary;
    private $artifactId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Item
     */
    public function setId(int $id): Item
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getDisenchantingSkillRank(): int
    {
        return $this->disenchantingSkillRank;
    }

    /**
     * @param int $disenchantingSkillRank
     *
     * @return Item
     */
    public function setDisenchantingSkillRank(int $disenchantingSkillRank): Item
    {
        $this->disenchantingSkillRank = $disenchantingSkillRank;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Item
     */
    public function setDescription(string $description): Item
    {
        $this->description = $description;

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
     *
     * @return Item
     */
    public function setName(string $name): Item
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
     *
     * @return Item
     */
    public function setIcon(string $icon): Item
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return int
     */
    public function getStackable(): int
    {
        return $this->stackable;
    }

    /**
     * @param int $stackable
     *
     * @return Item
     */
    public function setStackable(int $stackable): Item
    {
        $this->stackable = $stackable;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemBind(): int
    {
        return $this->itemBind;
    }

    /**
     * @param int $itemBind
     *
     * @return Item
     */
    public function setItemBind(int $itemBind): Item
    {
        $this->itemBind = $itemBind;

        return $this;
    }

    /**
     * @return ItemBonusStats[]
     */
    public function getBonusStats(): array
    {
        return $this->bonusStats;
    }

    /**
     * @param ItemBonusStats[] $bonusStats
     *
     * @return Item
     */
    public function setBonusStats(array $bonusStats): Item
    {
        $this->bonusStats = $bonusStats;

        return $this;
    }

    /**
     * @param ItemBonusStats $itemBonusStat
     *
     * @return Item
     */
    public function addBonusStat(ItemBonusStats $itemBonusStat): Item
    {
        $this->bonusStats[] = $itemBonusStat;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasBonusStats(): bool
    {
        return count($this->bonusStats) > 0;
    }

    /**
     * @return array
     */
    public function getItemSpells(): array
    {
        return $this->itemSpells;
    }

    /**
     * @param array $itemSpells
     *
     * @return Item
     */
    public function setItemSpells(array $itemSpells): Item
    {
        $this->itemSpells = $itemSpells;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemSubClass(): int
    {
        return $this->itemSubClass;
    }

    /**
     * @param int $itemSubClass
     *
     * @return Item
     */
    public function setItemSubClass(int $itemSubClass): Item
    {
        $this->itemSubClass = $itemSubClass;

        return $this;
    }

    /**
     * @return int
     */
    public function getContainerSlots(): int
    {
        return $this->containerSlots;
    }

    /**
     * @param int $containerSlots
     *
     * @return Item
     */
    public function setContainerSlots(int $containerSlots): Item
    {
        $this->containerSlots = $containerSlots;

        return $this;
    }

    /**
     * @return WeaponInfo
     */
    public function getWeaponInfo(): WeaponInfo
    {
        return $this->weaponInfo;
    }

    /**
     * @param WeaponInfo $weaponInfo
     *
     * @return Item
     */
    public function setWeaponInfo(WeaponInfo $weaponInfo): Item
    {
        $this->weaponInfo = $weaponInfo;

        return $this;
    }

    /**
     * @return int
     */
    public function getIntentoryType(): int
    {
        return $this->intentoryType;
    }

    /**
     * @param int $intentoryType
     *
     * @return Item
     */
    public function setIntentoryType(int $intentoryType): Item
    {
        $this->intentoryType = $intentoryType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEquippable(): bool
    {
        return $this->equippable;
    }

    /**
     * @param bool $equippable
     *
     * @return Item
     */
    public function setEquippable(bool $equippable): Item
    {
        $this->equippable = $equippable;

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
     *
     * @return Item
     */
    public function setItemLevel(int $itemLevel): Item
    {
        $this->itemLevel = $itemLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCount(): int
    {
        return $this->maxCount;
    }

    /**
     * @param int $maxCount
     *
     * @return Item
     */
    public function setMaxCount(int $maxCount): Item
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDurability(): int
    {
        return $this->maxDurability;
    }

    /**
     * @param int $maxDurability
     *
     * @return Item
     */
    public function setMaxDurability(int $maxDurability): Item
    {
        $this->maxDurability = $maxDurability;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinFactionId(): int
    {
        return $this->minFactionId;
    }

    /**
     * @param int $minFactionId
     *
     * @return Item
     */
    public function setMinFactionId(int $minFactionId): Item
    {
        $this->minFactionId = $minFactionId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinReputation(): int
    {
        return $this->minReputation;
    }

    /**
     * @param int $minReputation
     *
     * @return Item
     */
    public function setMinReputation(int $minReputation): Item
    {
        $this->minReputation = $minReputation;

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
     *
     * @return Item
     */
    public function setQuality(int $quality): Item
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * @return int
     */
    public function getSellPrice(): int
    {
        return $this->sellPrice;
    }

    /**
     * @param int $sellPrice
     *
     * @return Item
     */
    public function setSellPrice(int $sellPrice): Item
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getRequiredSkill(): int
    {
        return $this->requiredSkill;
    }

    /**
     * @param int $requiredSkill
     *
     * @return Item
     */
    public function setRequiredSkill(int $requiredSkill): Item
    {
        $this->requiredSkill = $requiredSkill;

        return $this;
    }

    /**
     * @return int
     */
    public function getRequiredLevel(): int
    {
        return $this->requiredLevel;
    }

    /**
     * @param int $requiredLevel
     *
     * @return Item
     */
    public function setRequiredLevel(int $requiredLevel): Item
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource(): ItemSource
    {
        return $this->itemSource;
    }

    /**
     * @param ItemSource $itemSource
     *
     * @return Item
     */
    public function setItemSource(ItemSource $itemSource): Item
    {
        $this->itemSource = $itemSource;

        return $this;
    }

    /**
     * @return int
     */
    public function getBaseArmor(): int
    {
        return $this->baseArmor;
    }

    /**
     * @param int $baseArmor
     *
     * @return Item
     */
    public function setBaseArmor(int $baseArmor): Item
    {
        $this->baseArmor = $baseArmor;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasSockets(): bool
    {
        return $this->hasSockets;
    }

    /**
     * @param bool $hasSockets
     *
     * @return Item
     */
    public function setHasSockets(bool $hasSockets): Item
    {
        $this->hasSockets = $hasSockets;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuctionable(): bool
    {
        return $this->isAuctionable;
    }

    /**
     * @param bool $isAuctionable
     *
     * @return Item
     */
    public function setIsAuctionable(bool $isAuctionable): Item
    {
        $this->isAuctionable = $isAuctionable;

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
     *
     * @return Item
     */
    public function setArmor(int $armor): Item
    {
        $this->armor = $armor;

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
     *
     * @return Item
     */
    public function setDisplayInfoId(int $displayInfoId): Item
    {
        $this->displayInfoId = $displayInfoId;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameDescription(): string
    {
        return $this->nameDescription;
    }

    /**
     * @param string $nameDescription
     *
     * @return Item
     */
    public function setNameDescription(string $nameDescription): Item
    {
        $this->nameDescription = $nameDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameDescriptionColor(): string
    {
        return $this->nameDescriptionColor;
    }

    /**
     * @param string $nameDescriptionColor
     *
     * @return Item
     */
    public function setNameDescriptionColor(string $nameDescriptionColor): Item
    {
        $this->nameDescriptionColor = $nameDescriptionColor;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUpgradable(): bool
    {
        return $this->upgradable;
    }

    /**
     * @param bool $upgradable
     *
     * @return Item
     */
    public function setUpgradable(bool $upgradable): Item
    {
        $this->upgradable = $upgradable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHeroicTooltip(): bool
    {
        return $this->heroicTooltip;
    }

    /**
     * @param bool $heroicTooltip
     *
     * @return Item
     */
    public function setHeroicTooltip(bool $heroicTooltip): Item
    {
        $this->heroicTooltip = $heroicTooltip;

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
     *
     * @return Item
     */
    public function setContext(string $context): Item
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
     *
     * @return Item
     */
    public function setBonusLists(array $bonusLists): Item
    {
        $this->bonusLists = $bonusLists;

        return $this;
    }

    /**
     * @return array
     */
    public function getAvailableContexts(): array
    {
        return $this->availableContexts;
    }

    /**
     * @param array $availableContexts
     *
     * @return Item
     */
    public function setAvailableContexts(array $availableContexts): Item
    {
        $this->availableContexts = $availableContexts;

        return $this;
    }

    /**
     * @return ItemBonusSummary
     */
    public function getBonusSummary(): ItemBonusSummary
    {
        return $this->bonusSummary;
    }

    /**
     * @param ItemBonusSummary $bonusSummary
     *
     * @return Item
     */
    public function setBonusSummary(ItemBonusSummary $bonusSummary): Item
    {
        $this->bonusSummary = $bonusSummary;

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
     *
     * @return Item
     */
    public function setArtifactId(int $artifactId): Item
    {
        $this->artifactId = $artifactId;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemClass(): int
    {
        return $this->itemClass;
    }

    /**
     * @param int $itemClass
     *
     * @return Item
     */
    public function setItemClass(int $itemClass): Item
    {
        $this->itemClass = $itemClass;

        return $this;
    }
}