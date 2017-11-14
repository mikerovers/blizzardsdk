<?php

namespace MR\BlizzardSdk\Model\Wow\Pets;

class PetAbility
{
    private $id;
    private $name;
    private $icon;
    private $cooldown;
    private $rounds;
    private $petTypeId;
    private $isPassive;
    private $hideHints;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): PetAbility
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string$name): PetAbility
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): PetAbility
    {
        $this->icon = $icon;

        return $this;
    }

    public function getCooldown(): int
    {
        return $this->cooldown;
    }

    public function setCooldown(int $cooldown): PetAbility
    {
        $this->cooldown = $cooldown;

        return $this;
    }

    public function getRounds(): int
    {
        return $this->rounds;
    }

    public function setRounds(int $rounds): PetAbility
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getPetTypeId(): int
    {
        return $this->petTypeId;
    }

    public function setPetTypeId(int $petTypeId): PetAbility
    {
        $this->petTypeId = $petTypeId;

        return $this;
    }

    public function getIsPassive(): bool
    {
        return $this->isPassive;
    }

    public function setIsPassive(bool $isPassive): PetAbility
    {
        $this->isPassive = $isPassive;

        return $this;
    }

    public function getHideHints(): bool
    {
        return $this->hideHints;
    }

    public function setHideHints(bool $hideHints): PetAbility
    {
        $this->hideHints = $hideHints;

        return $this;
    }
}
