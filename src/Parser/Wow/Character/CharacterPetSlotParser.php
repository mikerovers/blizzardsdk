<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterPetSlot;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterPetSlotParser extends AbstractParser
{
    public function fromArray(string $json): CharacterPetSlot
    {
        $characterPetSlot = $this->getSerializer()->deserialize($json, CharacterPetSlot::class, 'json');

        return $characterPetSlot;
    }
}