<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Items\ItemClass;
use MR\BlizzardSdk\Parser\AbstractParser;

class ItemClassParser extends AbstractParser
{
    public function fromArray(string $json): ItemClass
    {
        $itemClass = $this->getSerializer()->deserialize($json, ItemClass::class, 'json');

        return $itemClass;
    }
}