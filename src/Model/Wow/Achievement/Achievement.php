<?php

namespace MR\BlizzardSdk\Model\Wow\Achievement;

class Achievement
{
    private $id;
    private $title;
    private $points;
    private $description;
    private $reward;
    private $rewardItems = [];
    private $icon;
    private $criteria = [];
    private $accountWide;
    private $factionId;

    /**
     * @param AchievementCriteria $criteria
     *
     * @return Achievement
     */
    public function addCriteria(AchievementCriteria $criteria): Achievement
    {
        $this->criteria[] = $criteria;

        return $this;
    }

    /**
     * @return AchievementCriteria[]
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }

    /**
     * @param AchievementCriteria[] $criteria
     *
     * @return Achievement
     */
    public function setCriteria(array $criteria): Achievement
    {
        $this->criteria = $criteria;

        return $this;
    }

    public function hasCriteria(): bool
    {
        return count($this->getCriteria()) > 0;
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
     * @return Achievement
     */
    public function setId(int $id): Achievement
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Achievement
     */
    public function setTitle(string $title): Achievement
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     * @return Achievement
     */
    public function setPoints(int $points): Achievement
    {
        $this->points = $points;

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
     * @return Achievement
     */
    public function setDescription(string $description): Achievement
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getReward(): string
    {
        return $this->reward;
    }

    /**
     * @param string $reward
     * @return Achievement
     */
    public function setReward(string $reward): Achievement
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * @return RewardItem[]
     */
    public function getRewardItems(): array
    {
        return $this->rewardItems;
    }


    /**
     * @param RewardItem $rewardItem
     *
     * @return Achievement
     */
    public function addRewardItem(RewardItem $rewardItem): Achievement
    {
        var_dump('hey');
        array_push($this->rewardItems, $rewardItem);

        return $this;
    }


    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return Achievement
     */
    public function setIcon(string $icon): Achievement
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAccountWide(): bool
    {
        return $this->accountWide;
    }

    /**
     * @param bool $accountWide
     * @return Achievement
     */
    public function setAccountWide(bool $accountWide): Achievement
    {
        $this->accountWide = $accountWide;

        return $this;
    }

    /**
     * @return int
     */
    public function getFactionId(): int
    {
        return $this->factionId;
    }

    /**
     * @param int $factionId
     * @return Achievement
     */
    public function setFactionId(int $factionId): Achievement
    {
        $this->factionId = $factionId;

        return $this;
    }


}
