<?php

namespace MR\BlizzardSdk\Model\Wow;

class Boss
{
    private $id;
    private $name;
    private $urlSlug;
    private $description;
    private $zoneId;
    private $availableInNormalMode;
    private $availableInHeroicMode;
    private $health;
    private $heroicHealth;
    private $level;
    private $journalId;
    private $npcs = [];

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
     * @return Boss
     */
    public function setId(int $id): Boss
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
     *
     * @return $this
     */
    public function setName(string $name)
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
     * @return Boss
     */
    public function setUrlSlug(string $urlSlug): Boss
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
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getZoneId(): int
    {
        return $this->zoneId;
    }

    /**
     * @param int $zoneId
     *
     * @return Boss
     */
    public function setZoneId(int $zoneId): Boss
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableInNormalMode(): bool
    {
        return $this->availableInNormalMode;
    }

    /**
     * @param bool $availableInNormalMode
     *
     * @return Boss
     */
    public function setAvailableInNormalMode(bool $availableInNormalMode): Boss
    {
        $this->availableInNormalMode = $availableInNormalMode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableInHeroicMode(): bool
    {
        return $this->availableInHeroicMode;
    }

    /**
     * @param bool $availableInHeroicMode
     *
     * @return Boss
     */
    public function setAvailableInHeroicMode(bool $availableInHeroicMode): Boss
    {
        $this->availableInHeroicMode = $availableInHeroicMode;

        return $this;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     *
     * @return Boss
     */
    public function setHealth(int $health): Boss
    {
        $this->health = $health;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeroicHealth(): int
    {
        return $this->heroicHealth;
    }

    /**
     * @param int $heroicHealth
     *
     * @return Boss
     */
    public function setHeroicHealth(int $heroicHealth): Boss
    {
        $this->heroicHealth = $heroicHealth;

        return $this;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return Boss
     */
    public function setLevel(int $level): Boss
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getJournalId(): int
    {
        return $this->journalId;
    }

    /**
     * @param int $journalId
     *
     * @return Boss
     */
    public function setJournalId(int $journalId): Boss
    {
        $this->journalId = $journalId;

        return $this;
    }

    /**
     * @return Npc[]
     */
    public function getNpcs(): array
    {
        return $this->npcs;
    }

    /**
     * @param Npc[] $npcs
     *
     * @return Boss
     */
    public function setNpcs(array $npcs): Boss
    {
        $this->npcs = $npcs;

        return $this;
    }
}
