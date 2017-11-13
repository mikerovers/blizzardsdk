<?php

namespace MR\BlizzardSdk\Model;

class Collection
{
    /**
     * @var array
     */
    private $items;

    /**
     * @var int
     */
    private $total;

    /**
     * Collection constructor.
     * @param array $items
     * @param int $total
     */
    public function __construct(array $items, int $total)
    {
        $this->items = $items;
        $this->total = $total;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
}
