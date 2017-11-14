<?php

namespace MR\BlizzardSdk\Model\Wow\Zone;


use MR\BlizzardSdk\Model\Wow\Boss;

class Zone
{
    private $id;
    private $name;
    private $urlSlug;
    private $description;
    private $location;
    private $expansionId;
    private $numPlayers;
    private $isDungeon;
    private $isRaid;
    private $advisedLevel;
    private $advisedMaxLevel;
    private $advisedHeroicMinLevel;
    private $advisedHeroicMaxLevel;
    private $availableModes;
    private $lfgNormalMinGearLevel;
    private $lfgHeroicMinGearLevel;
    private $floors;
    private $bosses;

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
     * @return Zone
     */
    public function setId(int $id): Zone
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

    public function setName(string $name): Zone
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }

    /**
     * @param string $urlSlug
     *
     * @return Zone
     */
    public function setUrlSlug(string $urlSlug): Zone
    {
        $this->urlSlug = $urlSlug;

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
     * @return Zone
     */
    public function setDescription(string $description): Zone
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return ZoneLocation
     */
    public function getLocation(): ZoneLocation
    {
        return $this->location;
    }

    /**
     * @param ZoneLocation $location
     *
     * @return Zone
     */
    public function setLocation(ZoneLocation $location): Zone
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpansionId(): int
    {
        return $this->expansionId;
    }

    /**
     * @param int $expansionId
     *
     * @return Zone
     */
    public function setExpansionId(int $expansionId): Zone
    {
        $this->expansionId = $expansionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumPlayers(): string
    {
        return $this->numPlayers;
    }

    /**
     * @param string $numPlayers
     *
     * @return Zone
     */
    public function setNumPlayers(string $numPlayers): Zone
    {
        $this->numPlayers = $numPlayers;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDungeon(): bool
    {
        return $this->isDungeon;
    }

    /**
     * @param bool $isDungeon
     *
     * @return Zone
     */
    public function setIsDungeon(bool $isDungeon): Zone
    {
        $this->isDungeon = $isDungeon;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRaid(): bool
    {
        return $this->isRaid;
    }

    /**
     * @param bool $isRaid
     *
     * @return Zone
     */
    public function setIsRaid(bool $isRaid): Zone
    {
        $this->isRaid = $isRaid;

        return $this;
    }

    /**
     * @return int
     */
    public function getAdvisedLevel(): int
    {
        return $this->advisedLevel;
    }

    /**
     * @param int $advisedLevel
     *
     * @return Zone
     */
    public function setAdvisedLevel(int $advisedLevel): Zone
    {
        $this->advisedLevel = $advisedLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getAdvisedMaxLevel(): int
    {
        return $this->advisedMaxLevel;
    }

    /**
     * @param int $advisedMaxLevel
     *
     * @return Zone
     */
    public function setAdvisedMaxLevel(int $advisedMaxLevel): Zone
    {
        $this->advisedMaxLevel = $advisedMaxLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getAdvisedHeroicMinLevel(): int
    {
        return $this->advisedHeroicMinLevel;
    }

    /**
     * @param int $advisedHeroicMinLevel
     *
     * @return Zone
     */
    public function setAdvisedHeroicMinLevel(int $advisedHeroicMinLevel): Zone
    {
        $this->advisedHeroicMinLevel = $advisedHeroicMinLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getAdvisedHeroicMaxLevel(): int
    {
        return $this->advisedHeroicMaxLevel;
    }

    /**
     * @param int $advisedHeroicMaxLevel
     *
     * @return Zone
     */
    public function setAdvisedHeroicMaxLevel(int $advisedHeroicMaxLevel): Zone
    {
        $this->advisedHeroicMaxLevel = $advisedHeroicMaxLevel;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAvailableModes(): array
    {
        return $this->availableModes;
    }

    /**
     * @param string[] $availableModes
     *
     * @return Zone
     */
    public function setAvailableModes(array $availableModes): Zone
    {
        $this->availableModes = $availableModes;

        return $this;
    }

    /**
     * @return int
     */
    public function getLfgNormalMinGearLevel(): int
    {
        return $this->lfgNormalMinGearLevel;
    }

    /**
     * @param int $lfgNormalMinGearLevel
     *
     * @return Zone
     */
    public function setLfgNormalMinGearLevel(int $lfgNormalMinGearLevel): Zone
    {
        $this->lfgNormalMinGearLevel = $lfgNormalMinGearLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getLfgHeroicMinGearLevel(): int
    {
        return $this->lfgHeroicMinGearLevel;
    }

    /**
     * @param int $lfgHeroicMinGearLevel
     *
     * @return Zone
     */
    public function setLfgHeroicMinGearLevel(int $lfgHeroicMinGearLevel): Zone
    {
        $this->lfgHeroicMinGearLevel = $lfgHeroicMinGearLevel;

        return $this;
    }

    /**
     * @return int
     */
    public function getFloors(): int
    {
        return $this->floors;
    }

    /**
     * @param int $floors
     *
     * @return Zone
     */
    public function setFloors(int $floors): Zone
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * @return Boss[]
     */
    public function getBosses(): array
    {
        return $this->bosses;
    }

    /**
     * @param Boss[] $bosses
     *
     * @return Zone
     */
    public function setBosses(array $bosses): Zone
    {
        $this->bosses = $bosses;

        return $this;
    }

}