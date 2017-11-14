<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 14-11-17
 * Time: 18:06
 */

namespace MR\BlizzardSdk\Model\Wow\Pets;


class PetSpecie
{
    private $speciesId;
    private $petTypeId;
    private $creatureId;
    private $name;
    private $canBattle;
    private $icon;
    private $description;
    private $source;
    private $abilities = [];

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
     * @return PetSpecie
     */
    public function setSpeciesId(int $speciesId): PetSpecie
    {
        $this->speciesId = $speciesId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPetTypeId(): int
    {
        return $this->petTypeId;
    }

    /**
     * @param int $petTypeId
     *
     * @return PetSpecie
     */
    public function setPetTypeId(int $petTypeId): PetSpecie
    {
        $this->petTypeId = $petTypeId;

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
     * @param int $creatureId
     *
     * @return PetSpecie
     */
    public function setCreatureId(int $creatureId): PetSpecie
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
     * @param string $name
     *
     * @return PetSpecie
     */
    public function setName(string $name): PetSpecie
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanBattle(): bool
    {
        return $this->canBattle;
    }

    /**
     * @param bool $canBattle
     *
     * @return PetSpecie
     */
    public function setCanBattle(bool $canBattle): PetSpecie
    {
        $this->canBattle = $canBattle;

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
     *
     * @return PetSpecie
     */
    public function setIcon(string $icon): PetSpecie
    {
        $this->icon = $icon;

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
     *
     * @return PetSpecie
     */
    public function setDescription($description): PetSpecie
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return PetSpecie
     */
    public function setSource(string $source): PetSpecie
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return PetAbility[]
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param PetAbility[] $abilities
     *
     * @return PetSpecie
     */
    public function setAbilities(array $abilities): PetSpecie
    {
        $this->abilities = $abilities;

        return $this;
    }
}