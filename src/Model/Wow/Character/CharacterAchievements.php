<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterAchievements
{
    private $achievementsCompleted = [];
    private $achievementsCompletedTimestamp = [];
    private $criteria = [];
    private $criteriaQuantity = [];
    private $criteriaTimestamp = [];
    private $criteriaCreated = [];

    /**
     * @return int[]
     */
    public function getAchievementsCompleted(): array
    {
        return $this->achievementsCompleted;
    }

    /**
     * @param int[] $achievementsCompleted
     *
     * @return CharacterAchievements
     */
    public function setAchievementsCompleted(array $achievementsCompleted): CharacterAchievements
    {
        $this->achievementsCompleted = $achievementsCompleted;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getAchievementsCompletedTimestamp(): array
    {
        return $this->achievementsCompletedTimestamp;
    }

    /**
     * @param int[] $achievementsCompletedTimestamp
     *
     * @return CharacterAchievements
     */
    public function setAchievementsCompletedTimestamp(array $achievementsCompletedTimestamp): CharacterAchievements
    {
        $this->achievementsCompletedTimestamp = $achievementsCompletedTimestamp;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }

    /**
     * @param int[] $criteria
     *
     * @return CharacterAchievements
     */
    public function setCriteria(array $criteria): CharacterAchievements
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCriteriaQuantity(): array
    {
        return $this->criteriaQuantity;
    }

    /**
     * @param int[] $criteriaQuantity
     *
     * @return CharacterAchievements
     */
    public function setCriteriaQuantity(array $criteriaQuantity): CharacterAchievements
    {
        $this->criteriaQuantity = $criteriaQuantity;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCriteriaTimestamp(): array
    {
        return $this->criteriaTimestamp;
    }

    /**
     * @param int[] $criteriaTimestamp
     *
     * @return CharacterAchievements
     */
    public function setCriteriaTimestamp(array $criteriaTimestamp): CharacterAchievements
    {
        $this->criteriaTimestamp = $criteriaTimestamp;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getCriteriaCreated(): array
    {
        return $this->criteriaCreated;
    }

    /**
     * @param int[] $criteriaCreated
     *
     * @return CharacterAchievements
     */
    public function setCriteriaCreated(array $criteriaCreated): CharacterAchievements
    {
        $this->criteriaCreated = $criteriaCreated;

        return $this;
    }
}