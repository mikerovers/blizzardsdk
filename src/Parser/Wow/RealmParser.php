<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Realm;
use MR\BlizzardSdk\Parser\AbstractParser;

class RealmParser extends AbstractParser
{
    public function fromArray(string $json): Realm
    {
        $realm = $this->getSerializer()->deserialize($json, Realm::class, 'json');

        return $realm;
    }
}