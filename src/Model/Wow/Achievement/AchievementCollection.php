<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class AchievementCollection
{
    private $id;
    private $name;
    private $categories = [];
    private $achievements = [];

    /**
     * @return AchievementCollection[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param AchievementCollection $achievementCollection
     *
     * @return AchievementCollection
     */
    public function addCategory(AchievementCollection $achievementCollection): AchievementCollection
    {
        $this->categories[] = $achievementCollection;

        return $this;
    }

    /**
     * @param AchievementCollection[] $categories
     *
     * @return array
     */
    public function setCategories(array $categories): AchievementCollection
    {
        $this->categories = $categories;

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

    public function setAchievements(Array $achievements): AchievementCollection
    {
        $this->achievements = $achievements;

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