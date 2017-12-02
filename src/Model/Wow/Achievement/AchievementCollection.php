<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class AchievementCollection
{
    private $id;
    private $name;
    private $achievements = [];

    public function addAchievement(Achievement $achievement): AchievementCollection
    {
        $this->achievements[] = $achievement;

        return $this;
    }

    public function hasAchievements(): bool
    {
        return count($this->achievements) > 0;
    }

    public function getAchievements(): array
    {
        return $this->achievements;
    }

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
     * @return AchievementCollection
     */
    public function setId(int $id): AchievementCollection
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
     * @return AchievementCollection
     */
    public function setName(string $name): AchievementCollection
    {
        $this->name = $name;

        return $this;
    }
}