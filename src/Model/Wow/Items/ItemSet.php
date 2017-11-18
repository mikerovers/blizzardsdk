<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemSet
{
    private $id;
    private $name;
    private $setBonuses = [];
    private $items = [];

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
     * @return ItemSet
     */
    public function setId(int $id): ItemSet
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
     * @return ItemSet
     */
    public function setName(string $name): ItemSet
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param int[] $items
     *
     * @return ItemSet
     */
    public function setItems(array $items): ItemSet
    {
        $this->items = $items;

        return $this;
    }

    public function addSetBonus(ItemSetBonus $setBonus)
    {
        $this->setBonuses[] = $setBonus;
    }

    public function getSetBonuses(): array
    {
        return $this->setBonuses;
    }

    public function setSetBonuses(array $setBonuses)
    {
        $this->setBonuses = $setBonuses;
    }
}