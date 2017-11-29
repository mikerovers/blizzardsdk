<?php

namespace MR\BlizzardSdk\Parser\Wow\Character;

use MR\BlizzardSdk\Model\Wow\Character\CharacterMounts;
use MR\BlizzardSdk\Parser\AbstractParser;

class CharacterMountParser extends AbstractParser
{
    public function fromArray(string $json): CharacterMounts
    {
        $data = json_decode($json, true)['mounts'];
        $characterMounts = $this->getSerializer()->deserialize(json_encode($data), CharacterMounts::class, 'json');

        return $characterMounts;
    }
}