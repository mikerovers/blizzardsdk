<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterProfile;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterProfileParser extends AbstractParser
{
    public function fromArray(string $json): CharacterProfile
    {
        $characterProfile = $this->getSerializer()->deserialize($json, CharacterProfile::class, 'json');

        return $characterProfile;
    }
}