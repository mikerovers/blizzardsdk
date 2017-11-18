<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Items\ItemSet;
use MR\BlizzardSdk\Parser\AbstractParser;

class ItemSetParser extends AbstractParser
{
    public function fromArray(string $json): ItemSet
    {
        $itemSet = $this->getSerializer()->deserialize($json, ItemSet::class, 'json');

        return $itemSet;
    }

}