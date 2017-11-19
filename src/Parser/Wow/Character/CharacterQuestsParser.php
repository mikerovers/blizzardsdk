<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterQuests;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterQuestsParser extends AbstractParser
{
    public function fromArray(string $json): CharacterQuests
    {
        $characterQuests = $this->getSerializer()->deserialize($json, CharacterQuests::class, 'json');

        return $characterQuests;
    }
}