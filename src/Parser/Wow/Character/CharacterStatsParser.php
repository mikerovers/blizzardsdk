<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterStats;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterStatsParser extends AbstractParser
{
    public function fromArray(string $json): CharacterStats
    {
        $data = json_decode($json, true);
        $characterStats = $this->getSerializer()->denormalize($data['stats'], CharacterStats::class, 'json');

        return $characterStats;
    }
}