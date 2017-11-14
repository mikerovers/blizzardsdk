<?php

namespace MR\BlizzardSdk\Model\Wow\Pets;

class PetStats
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
     * @return PetStats
     */
    public function setSpeciesId(int $speciesId): PetStats
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
     * @return PetStats
     */
    public function setBreedId(int $breedId): PetStats
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
     * @return PetStats
     */
    public function setPetQualityId(int $petQualityId): PetStats
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
     * @return PetStats
     */
    public function setLevel(int $level): PetStats
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
     * @return PetStats
     */
    public function setHealth(int $health): PetStats
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
     * @return PetStats
     */
    public function setPower(int $power): PetStats
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
     * @return PetStats
     */
    public function setSpeed(int $speed): PetStats
    {
        $this->speed = $speed;

        return $this;
    }
}
