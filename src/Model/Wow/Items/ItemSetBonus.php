<?php

namespace MR\BlizzardSdk\Model\Wow\Items;

class ItemSetBonus
{
    private $description;
    private $threshold;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ItemSetBonus
    {
        $this->description = $description;

        return $this;
    }

    public function getThreshold(): int
    {
        return $this->threshold;
    }

    public function setThreshold(int $threshold): ItemSetBonus
    {
        $this->threshold = $threshold;

        return $this;
    }
}