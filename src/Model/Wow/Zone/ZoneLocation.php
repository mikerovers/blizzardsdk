<?php

namespace MR\BlizzardSdk\Model\Wow\Zone;

class ZoneLocation
{
    private $id;
    private $name;

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
     * @return ZoneLocation
     */
    public function setId(int $id): ZoneLocation
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): ZoneLocation
    {
        $this->name = $name;

        return $this;
    }
}