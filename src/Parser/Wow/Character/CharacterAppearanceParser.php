<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterAppearance;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterAppearanceParser extends AbstractParser
{
    public function fromArray(string $json): CharacterAppearance
    {
        $data = json_decode($json, true)['appearance'];
        $CharacterAppearance = $this->getSerializer()->deserialize(json_encode($data), CharacterAppearance::class, 'json');

        return $CharacterAppearance;
    }
}