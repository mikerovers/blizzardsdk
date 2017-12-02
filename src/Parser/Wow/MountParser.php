<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Character\CharacterMount;
use MR\BlizzardSdk\Parser\AbstractParser;

class MountParser extends AbstractParser
{
    public function fromArray(string $json)
    {
        $pet = $this->getSerializer()->deserialize($json, CharacterMount::class, 'json');

        return $pet;
    }
}