<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterPet
{
    private $name;
    private $spellId;
    private $creatureId;
    private $itemId;
    private $qualityId;
    private $icon;
    private $stats;
    private $battlePetGuid;
    private $isFavorite;
    private $isFirstAbilitySlotSelected;
    private $isSecondAbilitySlotSelected;
    private $isThirdAbilitySlotSelected;
    private $creatureName;
    private $canBattle;

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
     * @return CharacterPet
     */
    public function setName(string $name): CharacterPet
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpellId(): int
    {
        return $this->spellId;
    }

    /**
     * @param int $spellId
     *
     * @return CharacterPet
     */
    public function setSpellId(int $spellId): CharacterPet
    {
        $this->spellId = $spellId;

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
     * @return CharacterPet
     */
    public function setCreatureId(int $creatureId): CharacterPet
    {
        $this->creatureId = $creatureId;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     *
     * @return CharacterPet
     */
    public function setItemId(int $itemId): CharacterPet
    {
        $this->itemId = $itemId;

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
     * @param int $qualityId
     *
     * @return CharacterPet
     */
    public function setQualityId(int $qualityId): CharacterPet
    {
        $this->qualityId = $qualityId;

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
     * @return CharacterPet
     */
    public function setIcon(string $icon): CharacterPet
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return CharacterPetStats
     */
    public function getStats(): CharacterPetStats
    {
        return $this->stats;
    }

    /**
     * @param CharacterPetStats $stats
     *
     * @return CharacterPet
     */
    public function setStats(CharacterPetStats $stats): CharacterPet
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @return string
     */
    public function getBattlePetGuid(): string
    {
        return $this->battlePetGuid;
    }

    /**
     * @param string $battlePetGuid
     *
     * @return CharacterPet
     */
    public function setBattlePetGuid(string $battlePetGuid): CharacterPet
    {
        $this->battlePetGuid = $battlePetGuid;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFavorite(): bool
    {
        return $this->isFavorite;
    }

    /**
     * @param bool $isFavorite
     *
     * @return CharacterPet
     */
    public function setIsFavorite(bool $isFavorite): CharacterPet
    {
        $this->isFavorite = $isFavorite;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFirstAbilitySlotSelected(): bool
    {
        return $this->isFirstAbilitySlotSelected;
    }

    /**
     * @param bool $isFirstAbilitySlotSelected
     *
     * @return CharacterPet
     */
    public function setIsFirstAbilitySlotSelected(bool $isFirstAbilitySlotSelected): CharacterPet
    {
        $this->isFirstAbilitySlotSelected = $isFirstAbilitySlotSelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSecondAbilitySlotSelected(): bool
    {
        return $this->isSecondAbilitySlotSelected;
    }

    /**
     * @param bool $isSecondAbilitySlotSelected
     *
     * @return CharacterPet
     */
    public function setIsSecondAbilitySlotSelected(bool $isSecondAbilitySlotSelected): CharacterPet
    {
        $this->isSecondAbilitySlotSelected = $isSecondAbilitySlotSelected;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsThirdAbilitySlotSelected(): bool
    {
        return $this->isThirdAbilitySlotSelected;
    }

    /**
     * @param bool $isThirdAbilitySlotSelected
     *
     * @return $this
     */
    public function setIsThirdAbilitySlotSelected(bool $isThirdAbilitySlotSelected)
    {
        $this->isThirdAbilitySlotSelected = $isThirdAbilitySlotSelected;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatureName(): string
    {
        return $this->creatureName;
    }

    /**
     * @param string $creatureName
     *
     * @return CharacterPet
     */
    public function setCreatureName(string $creatureName): CharacterPet
    {
        $this->creatureName = $creatureName;

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
     * @return CharacterPet
     */
    public function setCanBattle(bool $canBattle): CharacterPet
    {
        $this->canBattle = $canBattle;

        return $this;
    }
}