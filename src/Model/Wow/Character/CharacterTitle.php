<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterTitle
{
    private $id;
    private $name;
    private $selected;

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
     * @return CharacterTitle
     */
    public function setId(int $id): CharacterTitle
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
     * @return CharacterTitle
     */
    public function setName(string $name): CharacterTitle
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }

    /**
     * @param bool $selected
     *
     * @return CharacterTitle
     */
    public function setSelected(bool $selected): CharacterTitle
    {
        $this->selected = $selected;

        return $this;
    }
}