<?php

namespace MR\BlizzardSdk\Model\Wow\Pets;

class PetType
{
    private $id;
    private $key;
    private $name;
    private $typeAbilityId;
    private $strongAgainstId;
    private $weakAgainstId;

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
     * @return PetType
     */
    public function setId(int $id): PetType
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return PetType
     */
    public function setKey(string $key): PetType
    {
        $this->key = $key;

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
     * @return PetType
     */
    public function setName(string $name): PetType
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getTypeAbilityId(): int
    {
        return $this->typeAbilityId;
    }

    /**
     * @param int $typeAbilityId
     *
     * @return PetType
     */
    public function setTypeAbilityId(int $typeAbilityId): PetType
    {
        $this->typeAbilityId = $typeAbilityId;

        return $this;
    }

    /**
     * @return int
     */
    public function getStrongAgainstId(): int
    {
        return $this->strongAgainstId;
    }

    /**
     * @param int $strongAgainstId
     *
     * @return PetType
     */
    public function setStrongAgainstId(int $strongAgainstId): PetType
    {
        $this->strongAgainstId = $strongAgainstId;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeakAgainstId(): int
    {
        return $this->weakAgainstId;
    }

    /**
     * @param int $weakAgainstId
     *
     * @return PetType
     */
    public function setWeakAgainstId(int $weakAgainstId): PetType
    {
        $this->weakAgainstId = $weakAgainstId;

        return $this;
    }
}