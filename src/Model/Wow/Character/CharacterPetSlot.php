<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterPetSlot
{
    private $slot;
    private $battlePetGuid;
    private $isEmpty;
    private $isLocked;
    private $abilities = [];

    /**
     * @return int
     */
    public function getSlot(): int
    {
        return $this->slot;
    }

    /**
     * @param int $slot
     *
     * @return CharacterPetSlot
     */
    public function setSlot(int $slot): CharacterPetSlot
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * @return int
     */
    public function getBattlePetGuid(): string
    {
        return $this->battlePetGuid;
    }

    /**
     * @param int $battlePetGuid
     *
     * @return CharacterPetSlot
     */
    public function setBattlePetGuid(string $battlePetGuid): CharacterPetSlot
    {
        $this->battlePetGuid = $battlePetGuid;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEmpty(): bool
    {
        return $this->isEmpty;
    }

    /**
     * @param bool $isEmpty
     *
     * @return CharacterPetSlot
     */
    public function setIsEmpty(bool $isEmpty): CharacterPetSlot
    {
        $this->isEmpty = $isEmpty;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }

    /**
     * @param bool $isLocked
     *
     * @return CharacterPetSlot
     */
    public function setIsLocked(bool $isLocked): CharacterPetSlot
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param int[] $abilities
     *
     * @return CharacterPetSlot
     */
    public function setAbilities(array $abilities): CharacterPetSlot
    {
        $this->abilities = $abilities;

        return $this;
    }
}