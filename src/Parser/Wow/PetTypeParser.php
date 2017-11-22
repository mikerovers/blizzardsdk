<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Pets\PetType;
use MR\BlizzardSdk\Parser\AbstractParser;

class PetTypeParser extends AbstractParser
{
    public function fromArray(string $json): PetType
    {
        $petType = $this->getSerializer()->deserialize($json, PetType::class, 'json');

        return $petType;
    }
}