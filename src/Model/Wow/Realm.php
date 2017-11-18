<?php

namespace MR\BlizzardSdk\Model\Wow;

class Realm
{
    private $type;
    private $population;
    private $queue;
    private $status;
    private $name;
    private $slug;
    private $battlegroup;
    private $locale;
    private $timezone;
    private $connectedRealms = [];

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Realm
     */
    public function setType(string $type): Realm
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getPopulation(): string
    {
        return $this->population;
    }

    /**
     * @param string $population
     *
     * @return Realm
     */
    public function setPopulation(string $population): Realm
    {
        $this->population = $population;

        return $this;
    }

    /**
     * @return bool
     */
    public function getQueue(): bool
    {
        return $this->queue;
    }

    /**
     * @param bool $queue
     *
     * @return Realm
     */
    public function setQueue(bool $queue): Realm
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     *
     * @return Realm
     */
    public function setStatus(bool $status): Realm
    {
        $this->status = $status;

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
     * @return Realm
     */
    public function setName(string $name): Realm
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Realm
     */
    public function setSlug(string $slug): Realm
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getBattlegroup(): string
    {
        return $this->battlegroup;
    }

    /**
     * @param string $battlegroup
     *
     * @return Realm
     */
    public function setBattlegroup(string $battlegroup): Realm
    {
        $this->battlegroup = $battlegroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return Realm
     */
    public function setLocale(string $locale): Realm
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     *
     * @return Realm
     */
    public function setTimezone(string $timezone): Realm
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getConnectedRealms(): array
    {
        return $this->connectedRealms;
    }

    /**
     * @param string[] $connectedRealms
     *
     * @return Realm
     */
    public function setConnectedRealms(array $connectedRealms): Realm
    {
        $this->connectedRealms = $connectedRealms;

        return $this;
    }
}