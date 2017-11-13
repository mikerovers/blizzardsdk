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
    private $npcs;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Boss
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Boss
    {
        $this->name = $name;

        return $this;
    }

    public function getUrlSlug(): string
    {
        return $this->urlSlug;
    }

    public function setUrlSlug(string $urlSlug): Boss
    {
        $this->urlSlug = $urlSlug;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Boss
    {
        $this->description = $description;

        return $this;
    }

    public function getZoneId(): int
    {
        return $this->zoneId;
    }

    public function setZoneId(int $zoneId): Boss
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    public function getAvailableInNormalMode(): bool
    {
        return $this->availableInNormalMode;
    }

    public function setAvailableInNormalMode(bool $availableInNormalMode): Boss
    {
        $this->availableInNormalMode = $availableInNormalMode;

        return $this;
    }

    public function getAvailableInHeroicMode(): bool
    {
        return $this->availableInHeroicMode;
    }

    public function setAvailableInHeroicMode(bool $availableInHeroicMode): Boss
    {
        $this->availableInHeroicMode = $availableInHeroicMode;

        return $this;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): Boss
    {
        $this->health = $health;

        return $this;
    }

    public function getHeroicHealth(): int
    {
        return $this->heroicHealth;
    }

    public function setHeroicHealth(int $heroicHealth): Boss
    {
        $this->heroicHealth = $heroicHealth;

        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): Boss
    {
        $this->level = $level;

        return $this;
    }

    public function getJournalId(): int
    {
        return $this->journalId;
    }

    public function setJournalId(int $journalId): Boss
    {
        $this->journalId = $journalId;

        return $this;
    }

    public function getNpcs(): array
    {
        return $this->npcs;
    }

    public function setNpcs(array $npcs): Boss
    {
        $this->npcs = $npcs;

        return $this;
    }
}
