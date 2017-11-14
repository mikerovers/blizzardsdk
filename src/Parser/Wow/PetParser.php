<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Pets\Pet;
use MR\BlizzardSdk\Parser\AbstractParser;

class PetParser extends AbstractParser
{
    /**
     * @param string $json
     * @return Pet
     */
    public function fromArray(string $json): Pet
    {
        $pet = $this->getSerializer()->deserialize($json, Pet::class, 'json');

        return $pet;
    }
}
