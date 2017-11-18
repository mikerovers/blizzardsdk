<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Items\Item;
use MR\BlizzardSdk\Parser\AbstractParser;

class ItemParser extends AbstractParser
{
    public function fromArray(string $json): Item
    {
        $item = $this->getSerializer()->deserialize($json, Item::class, 'json');

        return $item;
    }
}