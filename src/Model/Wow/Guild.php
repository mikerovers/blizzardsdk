<?php

namespace MR\BlizzardSdk\Model\Wow;

class Guild
{
    private $lastModified;
    private $name;
    private $realm;
    private $battlegroup;
    private $level;
    private $side;
    private $achievementPoints;
    private $emblem;

    /**
     * @return GuildEmblem
     */
    public function getEmblem(): GuildEmblem
    {
        return $this->emblem;
    }

    /**
     * @param GuildEmblem $emblem
     *
     * @return Guild
     */
    public function setEmblem(GuildEmblem $emblem): Guild
    {
        $this->emblem = $emblem;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastModified(): int
    {
        return $this->lastModified;
    }

    /**
     * @param int $lastModified
     *
     * @return Guild
     */
    public function setLastModified(int $lastModified): Guild
    {
        $this->lastModified = $lastModified;

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
     * @return Guild
     */
    public function setName(string $name): Guild
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @param string $realm
     *
     * @return Guild
     */
    public function setRealm(string $realm): Guild
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    /**
     * @param string $battlegroup
     *
     * @return Guild
     */
    public function setBattlegroup(string $battlegroup): Guild
    {
        $this->battlegroup = $battlegroup;

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
     * @return Guild
     */
    public function setLevel(int $level): Guild
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getSide(): int
    {
        return $this->side;
    }

    /**
     * @param int $side
     *
     * @return Guild
     */
    public function setSide(int $side): Guild
    {
        $this->side = $side;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchievementPoints(): int
    {
        return $this->achievementPoints;
    }

    /**
     * @param int $achievementPoints
     *
     * @return Guild
     */
    public function setAchievementPoints(int $achievementPoints): Guild
    {
        $this->achievementPoints = $achievementPoints;

        return $this;
    }
}
