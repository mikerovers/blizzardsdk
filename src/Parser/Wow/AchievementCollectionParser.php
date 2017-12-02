<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Achievement\AchievementCollection;
use MR\BlizzardSdk\Parser\AbstractParser;

class AchievementCollectionParser extends AbstractParser
{
    public function fromArray(string $json)
    {
        $achievementCollection = $this->getSerializer()->deserialize($json, AchievementCollection::class, 'json');

        return $achievementCollection;
    }
}