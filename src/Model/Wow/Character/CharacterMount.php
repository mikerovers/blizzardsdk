<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterMount
{
    private $name;
    private $spellId;
    private $creatureId;
    private $itemId;
    private $qualityId;
    private $icon;
    private $isGround;
    private $isFlying;
    private $isAquatic;
    private $isJumping;

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
     * @return CharacterMount
     */
    public function setName(string $name): CharacterMount
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
     * @return CharacterMount
     */
    public function setSpellId(int $spellId): CharacterMount
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
     * @return CharacterMount
     */
    public function setCreatureId(int $creatureId): CharacterMount
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
     * @return CharacterMount
     */
    public function setItemId(int $itemId): CharacterMount
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
     * @return CharacterMount
     */
    public function setQualityId(int $qualityId): CharacterMount
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
     * @return CharacterMount
     */
    public function setIcon(string $icon): CharacterMount
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGround(): bool
    {
        return $this->isGround;
    }

    /**
     * @param bool $isGround
     *
     * @return CharacterMount
     */
    public function setIsGround(bool $isGround): CharacterMount
    {
        $this->isGround = $isGround;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFlying(): bool
    {
        return $this->isFlying;
    }

    /**
     * @param bool $isFlying
     *
     * @return CharacterMount
     */
    public function setIsFlying(bool $isFlying): CharacterMount
    {
        $this->isFlying = $isFlying;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAquatic(): bool
    {
        return $this->isAquatic;
    }

    /**
     * @param bool $isAquatic
     *
     * @return CharacterMount
     */
    public function setIsAquatic(bool $isAquatic): CharacterMount
    {
        $this->isAquatic = $isAquatic;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsJumping(): bool
    {
        return $this->isJumping;
    }

    /**
     * @param bool $isJumping
     *
     * @return CharacterMount
     */
    public function setIsJumping(bool $isJumping): CharacterMount
    {
        $this->isJumping = $isJumping;

        return $this;
    }
}