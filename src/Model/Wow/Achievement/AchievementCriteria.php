<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class AchievementCriteria
{
    private $id;
    private $description;
    private $orderIndex;
    private $max;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AchievementCriteria
     */
    public function setId(int $id): AchievementCriteria
    {
        $this->id = $id;

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
     * @return AchievementCriteria
     */
    public function setDescription(string $description): AchievementCriteria
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderIndex(): int
    {
        return $this->orderIndex;
    }

    /**
     * @param int $orderIndex
     * @return AchievementCriteria
     */
    public function setOrderIndex(int $orderIndex): AchievementCriteria
    {
        $this->orderIndex = $orderIndex;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return AchievementCriteria
     */
    public function setMax(int $max): AchievementCriteria
    {
        $this->max = $max;

        return $this;
    }
}
