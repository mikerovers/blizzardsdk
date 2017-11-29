<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterClass;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterClassParser extends AbstractParser
{
    public function fromArray(string $json): CharacterClass
    {
        $characterClass = $this->getSerializer()->deserialize($json, CharacterClass::class, 'json');

        return $characterClass;
    }
}