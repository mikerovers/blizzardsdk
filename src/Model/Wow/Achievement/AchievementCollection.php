<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class AchievementCollection
{
    private $id;
    private $name;

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
     * @param Achievement $achievement
     *
     * @return AchievementCollection
     */
    public function addAchievement(Achievement $achievement): AchievementCollection
    {
        $this->achievements[] = $achievement;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasAchievements(): bool
    {
        return count($this->achievements) > 0;
    }

    /**
     * @return Achievement[]
     */
    public function getAchievement(): array
    {
        return $this->achievements;
    }

    /**
     * @param Achievement[] $achievements
     *
     * @return AchievementCollection
     */
    public function setAchievements(array $achievements): AchievementCollection
    {
        $this->achievements = $achievements;

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
    }
}