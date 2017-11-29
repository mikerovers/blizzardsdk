<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemSubClass
{
    private $subclass;
    private $name;

    /**
     * @return int
     */
    public function getSubclass(): int
    {
        return $this->subclass;
    }

    /**
     * @param int $subclass
     *
     * @return ItemSubClass
     */
    public function setSubclass(int $subclass): ItemSubClass
    {
        $this->subclass = $subclass;

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
     * @return ItemSubClass
     */
    public function setName(string $name): ItemSubClass
    {
        $this->name = $name;

        return $this;
    }
}