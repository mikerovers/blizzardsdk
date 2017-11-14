<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Pets\PetAbility;
use MR\BlizzardSdk\Parser\AbstractParser;

class PetAbilityParser extends AbstractParser
{
    /**
     * @param string $json
     * @return PetAbility
     */
    public function fromArray(string $json): PetAbility
    {
        $petAbility = $this->getSerializer()->deserialize($json, PetAbility::class, 'json');

        return $petAbility;
    }
}
