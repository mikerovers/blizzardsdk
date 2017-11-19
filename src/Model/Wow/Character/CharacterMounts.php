<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterMounts
{
    private $numCollected;
    private $numNotCollected;
    private $collected = [];

    /**
     * @return int
     */
    public function getNumCollected(): int
    {
        return $this->numCollected;
    }

    /**
     * @param int $numCollected
     *
     * @return CharacterMounts
     */
    public function setNumCollected(int $numCollected): CharacterMounts
    {
        $this->numCollected = $numCollected;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumNotCollected(): int
    {
        return $this->numNotCollected;
    }

    /**
     * @param int $numNotCollected
     *
     * @return CharacterMounts
     */
    public function setNumNotCollected(int $numNotCollected): CharacterMounts
    {
        $this->numNotCollected = $numNotCollected;

        return $this;
    }

    /**
     * @return CharacterPet[]
     */
    public function getCollected(): array
    {
        return $this->collected;
    }

    /**
     * @param CharacterMount $characterPet
     *
     * @return CharacterMounts
     */
    public function addCollected(CharacterMount $characterPet): CharacterMounts
    {
        $this->collected[] = $characterPet;

        return $this;
    }

    /**
     * @param CharacterMount[] $collected
     *
     * @return CharacterMounts
     */
    public function setCollected(array $collected): CharacterMounts
    {
        $this->collected = $collected;

        return $this;
    }
}