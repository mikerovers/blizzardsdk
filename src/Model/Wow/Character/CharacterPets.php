<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterPets
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
     * @return CharacterPets
     */
    public function setNumCollected(int $numCollected): CharacterPets
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
     * @return CharacterPets
     */
    public function setNumNotCollected(int $numNotCollected): CharacterPets
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
     * @param CharacterPet $characterPet
     *
     * @return CharacterPets
     */
    public function addCollected(CharacterPet $characterPet): CharacterPets
    {
        $this->collected[] = $characterPet;

        return $this;
    }

    /**
     * @param CharacterPet[] $collected
     *
     * @return CharacterPets
     */
    public function setCollected(array $collected): CharacterPets
    {
        $this->collected = $collected;

        return $this;
    }
}