<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemClass
{
    private $class;
    private $name;
    private $subClasses = [];

    /**
     * @return int
     */
    public function getClass(): int
    {
        return $this->class;
    }

    /**
     * @param int $class
     *
     * @return ItemClass
     */
    public function setClass(int $class): ItemClass
    {
        $this->class = $class;

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
     * @return ItemClass
     */
    public function setName(string $name): ItemClass
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ItemSubClass[]
     */
    public function getSubClasses(): array
    {
        return $this->subClasses;
    }

    /**
     * @param ItemSubClass $itemSubClass
     *
     * @return ItemClass
     */
    public function addSubClass(ItemSubClass $itemSubClass): ItemClass
    {
        $this->subClasses[] = $itemSubClass;

        return $this;
    }

    /**
     * @param ItemSubClass[] $subClasses
     *
     * @return ItemClass
     */
    public function setSubClasses(array $subClasses): ItemClass
    {
        $this->subClasses = $subClasses;

        return $this;
    }
}