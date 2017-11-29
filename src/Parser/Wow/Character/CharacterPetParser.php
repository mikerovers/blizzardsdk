<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterPets;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterPetParser extends AbstractParser
{
    public function fromArray(string $json): CharacterPets
    {
        $data = json_decode($json, true)['pets'];

        $characterPets = $this->getSerializer()->deserialize(json_encode($data), CharacterPets::class, 'json');

        return $characterPets;
    }
}