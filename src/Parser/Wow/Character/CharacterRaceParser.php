<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterRace;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterRaceParser extends AbstractParser
{
    public function fromArray(string $json): CharacterRace
    {
        $characterRace = $this->getSerializer()->deserialize($json, CharacterRace::class, 'json');

        return $characterRace;
    }
}