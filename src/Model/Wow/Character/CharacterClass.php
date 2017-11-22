<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterClass
{
    private $id;
    private $mask;
    private $powerType;
    private $name;

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
     * @return CharacterClass
     */
    public function setId(int $id): CharacterClass
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMask(): int
    {
        return $this->mask;
    }

    /**
     * @param int $mask
     *
     * @return CharacterClass
     */
    public function setMask(int $mask): CharacterClass
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * @return string
     */
    public function getPowerType(): string
    {
        return $this->powerType;
    }

    /**
     * @param string $powerType
     *
     * @return CharacterClass
     */
    public function setPowerType(string$powerType): CharacterClass
    {
        $this->powerType = $powerType;

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
     * @return CharacterClass
     */
    public function setName(string $name): CharacterClass
    {
        $this->name = $name;

        return $this;
    }
}