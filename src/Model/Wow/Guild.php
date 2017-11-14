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

    public function getLastModified(): \DateTime
    {
        return $this->lastModified;
    }

    public function setLastModified(\DateTime $lastModified): Guild
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Guild
    {
        $this->name = $name;

        return $this;
    }

    public function getRealm()
    {
        return $this->realm;
    }

    public function setRealm(string $realm): Guild
    {
        $this->realm = $realm;

        return $this;
    }

    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    public function setBattlegroup(string $battlegroup): Guild
    {
        $this->battlegroup = $battlegroup;

        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): Guild
    {
        $this->level = $level;

        return $this;
    }

    public function getSide(): int
    {
        return $this->side;
    }

    public function setSide(int $side): Guild
    {
        $this->side = $side;

        return $this;
    }

    public function getAchievementPoints(): int
    {
        return $this->achievementPoints;
    }

    public function setAchievementPoints(int $achievementPoints): Guild
    {
        $this->achievementPoints = $achievementPoints;

        return $this;
    }
}
