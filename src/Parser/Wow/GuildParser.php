<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Guild;
use MR\BlizzardSdk\Parser\AbstractParser;

class GuildParser extends AbstractParser
{
    public function fromArray(string $json): Guild
    {
        $guild = $this->getSerializer()->deserialize($json, Guild::class, 'json');

        return $guild;
    }
}
