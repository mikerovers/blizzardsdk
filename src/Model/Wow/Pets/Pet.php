<?php

class Pet
{
    private $canBattle;
    private $creatureId;
    private $name;
    private $family;
    private $icon;
    private $qualityId;
    private $stats;
    private $strongAgainst = [];
    private $typeId;
    private $weakAgainst = [];

    /**
     * @return bool
     */
    public function getCanBattle(): bool
    {
        return $this->canBattle;
    }

    /**
     * @param $canBattle
     * @return Pet
     */
    public function setCanBattle($canBattle): Pet
    {
        $this->canBattle = $canBattle;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreatureId(): int
    {
        return $this->creatureId;
    }

    /**
     * @param $creatureId
     * @return Pet
     */
    public function setCreatureId($creatureId): Pet
    {
        $this->creatureId = $creatureId;

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
     * @param $name
     * @return Pet
     */
    public function setName($name): Pet
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @param $family
     * @return Pet
     */
    public function setFamily($family): Pet
    {
        $this->family = $family;

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
     * @param $icon
     * @return Pet
     */
    public function setIcon($icon): Pet
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return int
     */
    public function getQualityId(): int
    {
        return $this->qualityId;
    }

    /**
     * @param $qualityId
     * @return Pet
     */
    public function setQualityId($qualityId): Pet
    {
        $this->qualityId = $qualityId;

        return $this;
    }

    /**
     * @return PetStats
     */
    public function getStats(): PetStats
    {
        return $this->stats;
    }

    /**
     * @param PetStats $stats
     * @return Pet
     */
    public function setStats(PetStats$stats): Pet
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getStrongAgainst(): array
    {
        return $this->strongAgainst;
    }

    /**
     * @param string[] $strongAgainst
     * @return Pet
     */
    public function setStrongAgainst(array $strongAgainst): Pet
    {
        $this->strongAgainst = $strongAgainst;

        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param $typeId
     * @return Pet
     */
    public function setTypeId($typeId): Pet
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWeakAgainst(): array
    {
        return $this->weakAgainst;
    }

    /**
     * @param string[] $weakAgainst
     * @return Pet
     */
    public function setWeakAgainst(array $weakAgainst): Pet
    {
        $this->weakAgainst = $weakAgainst;

        return $this;
    }
}
