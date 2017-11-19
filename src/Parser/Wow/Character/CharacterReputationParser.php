<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterReputation;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterReputationParser extends AbstractParser
{
    public function fromArray(string $json): CharacterReputation
    {
        $characterReputation = $this->getSerializer()->deserialize($json, CharacterReputation::class, 'json');

        return $characterReputation;
    }
}