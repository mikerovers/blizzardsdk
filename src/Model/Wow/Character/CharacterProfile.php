<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterProfile
{
    private $lastModified;
    private $name;
    private $realm;
    private $battlegroup;
    private $class;
    private $race;
    private $gender;
    private $level;
    private $achievementsPoints;
    private $thumbnail;
    private $calcClass;
    private $faction;
    private $totalHonorableKills;

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
     * @return CharacterProfile
     */
    public function setLastModified(int $lastModified): CharacterProfile
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
     * @return CharacterProfile
     */
    public function setName(string $name): CharacterProfile
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRealm(): string
    {
        return $this->realm;
    }

    /**
     * @param string $realm
     *
     * @return CharacterProfile
     */
    public function setRealm(string $realm): CharacterProfile
    {
        $this->realm = $realm;

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
     * @return CharacterProfile
     */
    public function setBattlegroup(string $battlegroup): CharacterProfile
    {
        $this->battlegroup = $battlegroup;

        return $this;
    }

    /**
     * @return int
     */
    public function getClass(): int
    {
        return $this->class;
    }

    /**
     * @param int $class
     *
     * @return CharacterProfile
     */
    public function setClass(int $class): CharacterProfile
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @return int
     */
    public function getRace(): int
    {
        return $this->race;
    }

    /**
     * @param int $race
     *
     * @return CharacterProfile
     */
    public function setRace(int $race): CharacterProfile
    {
        $this->race = $race;

        return $this;
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     *
     * @return CharacterProfile
     */
    public function setGender(int $gender): CharacterProfile
    {
        $this->gender = $gender;

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
     * @return CharacterProfile
     */
    public function setLevel(int $level): CharacterProfile
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getAchievementsPoints(): int
    {
        return $this->achievementsPoints;
    }

    /**
     * @param int $achievementsPoints
     *
     * @return CharacterProfile
     */
    public function setAchievementsPoints(int $achievementsPoints): CharacterProfile
    {
        $this->achievementsPoints = $achievementsPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     *
     * @return CharacterProfile
     */
    public function setThumbnail(string $thumbnail): CharacterProfile
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @return string
     */
    public function getCalcClass(): string
    {
        return $this->calcClass;
    }

    /**
     * @param string $calcClass
     *
     * @return CharacterProfile
     */
    public function setCalcClass(string $calcClass): CharacterProfile
    {
        $this->calcClass = $calcClass;

        return $this;
    }

    /**
     * @return int
     */
    public function getFaction(): int
    {
        return $this->faction;
    }

    /**
     * @param int $faction
     *
     * @return CharacterProfile
     */
    public function setFaction(int $faction): CharacterProfile
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalHonorableKills(): int
    {
        return $this->totalHonorableKills;
    }

    /**
     * @param int $totalHonorableKills
     *
     * @return CharacterProfile
     */
    public function setTotalHonorableKills(int $totalHonorableKills): CharacterProfile
    {
        $this->totalHonorableKills = $totalHonorableKills;

        return $this;
    }
}