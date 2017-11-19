<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterPetStats
{
    private $speciesId;
    private $breedId;
    private $petQualityId;
    private $level;
    private $health;
    private $power;
    private $speed;

    /**
     * @return int
     */
    public function getSpeciesId(): int
    {
        return $this->speciesId;
    }

    /**
     * @param int $speciesId
     *
     * @return CharacterPetStats
     */
    public function setSpeciesId(int $speciesId): CharacterPetStats
    {
        $this->speciesId = $speciesId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBreedId(): int
    {
        return $this->breedId;
    }

    /**
     * @param int $breedId
     *
     * @return CharacterPetStats
     */
    public function setBreedId(int $breedId): CharacterPetStats
    {
        $this->breedId = $breedId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPetQualityId(): int
    {
        return $this->petQualityId;
    }

    /**
     * @param int $petQualityId
     *
     * @return CharacterPetStats
     */
    public function setPetQualityId(int $petQualityId): CharacterPetStats
    {
        $this->petQualityId = $petQualityId;

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
     * @return CharacterPetStats
     */
    public function setLevel(int $level): CharacterPetStats
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     *
     * @return CharacterPetStats
     */
    public function setHealth(int $health): CharacterPetStats
    {
        $this->health = $health;

        return $this;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param int $power
     *
     * @return CharacterPetStats
     */
    public function setPower(int $power): CharacterPetStats
    {
        $this->power = $power;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     *
     * @return CharacterPetStats
     */
    public function setSpeed(int $speed): CharacterPetStats
    {
        $this->speed = $speed;

        return $this;
    }
}