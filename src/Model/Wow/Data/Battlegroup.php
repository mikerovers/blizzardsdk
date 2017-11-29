<?php

namespace MR\BlizzardSdk\Model\Wow\Data;

class Battlegroup
{
    private $name;
    private $slug;

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
     * @return Battlegroup
     */
    public function setName(string $name): Battlegroup
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Battlegroup
     */
    public function setSlug(string $slug): Battlegroup
    {
        $this->slug = $slug;

        return $this;
    }
}