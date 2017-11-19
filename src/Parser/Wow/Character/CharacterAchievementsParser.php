<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterAchievements;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterAchievementsParser extends AbstractParser
{
    public function fromArray(string $json): CharacterAchievements
    {
        $data = json_decode($json, true)['achievements'];
        $characterAchievements = $this->getSerializer()->deserialize(json_encode($data), CharacterAchievements::class, 'json');

        return $characterAchievements;
    }
}