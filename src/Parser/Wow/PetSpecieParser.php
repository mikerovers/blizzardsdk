<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Pets\PetAbility;
use MR\BlizzardSdk\Model\Wow\Pets\PetSpecie;
use MR\BlizzardSdk\Parser\AbstractParser;

class PetSpecieParser extends AbstractParser
{
    /**
     * @param string $json
     * @return PetSpecie
     */
    public function fromArray(string $json): PetSpecie
    {
        $petSpecie = $this->getSerializer()->deserialize($json, PetSpecie::class, 'json');
        $petAbilityString = json_encode($petSpecie->getAbilities());

        $abilities = $this->getSerializer()->deserialize($petAbilityString, PetAbility::class . '[]', 'json');
        $petSpecie->setAbilities($abilities);

        return $petSpecie;
    }
}
