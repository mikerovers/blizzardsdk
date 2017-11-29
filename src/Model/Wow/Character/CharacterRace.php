<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterRace
{
    private $id;
    private $mask;
    private $side;
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
     * @return CharacterRace
     */
    public function setId(int $id): CharacterRace
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
     * @return CharacterRace
     */
    public function setMask(int $mask): CharacterRace
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @param string $side
     *
     * @return CharacterRace
     */
    public function setSide(string $side): CharacterRace
    {
        $this->side = $side;

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
     * @return CharacterRace
     */
    public function setName(string $name): CharacterRace
    {
        $this->name = $name;

        return $this;
    }
}