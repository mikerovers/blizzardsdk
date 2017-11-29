<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterTitle;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterTitleParser extends AbstractParser
{
    public function fromArray(string $json): CharacterTitle
    {
        $characterTitle = $this->getSerializer()->deserialize($json, CharacterTitle::class, 'json');

        return $characterTitle;
    }
}