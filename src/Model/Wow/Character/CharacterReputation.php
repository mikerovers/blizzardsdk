<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterReputation
{
    private $id;
    private $name;
    private $standing;
    private $value;
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
     *
     * @return CharacterReputation
     */
    public function setId(int $id): CharacterReputation
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
     * @return CharacterReputation
     */
    public function setName(string $name): CharacterReputation
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getStanding(): int
    {
        return $this->standing;
    }

    /**
     * @param int $standing
     *
     * @return CharacterReputation
     */
    public function setStanding(int $standing): CharacterReputation
    {
        $this->standing = $standing;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return CharacterReputation
     */
    public function setValue(int $value): CharacterReputation
    {
        $this->value = $value;

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
     *
     * @return CharacterReputation
     */
    public function setMax(int $max): CharacterReputation
    {
        $this->max = $max;

        return $this;
    }
}