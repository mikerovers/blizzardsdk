<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\GuildMember;
use MR\BlizzardSdk\Parser\AbstractParser;

class GuildMemberParser extends AbstractParser
{
    public function fromArray(string $json): GuildMember
    {
        $guildMember = $this->getSerializer()->deserialize($json, GuildMember::class, 'json');

        return $guildMember;
    }
}