<?php

namespace MR\BlizzardSdk\Parser\Wow\Data;

use MR\BlizzardSdk\Model\Wow\Data\Battlegroup;
use MR\BlizzardSdk\Parser\AbstractParser;

class BattlegroupParser extends AbstractParser
{
    public function fromArray(string $json): Battlegroup
    {
        $battlegroup = $this->getSerializer()->deserialize($json, Battlegroup::class, 'json');

        return $battlegroup;
    }
}