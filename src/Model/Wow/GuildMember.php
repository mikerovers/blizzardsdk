<?php

namespace MR\BlizzardSdk\Model\Wow;

use MR\BlizzardSdk\Model\Wow\Character\CharacterProfile;

class GuildMember
{
    private $rank;
    private $character;

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     *
     * @return GuildMember
     */
    public function setRank(int $rank): GuildMember
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * @return CharacterProfile
     */
    public function getCharacter(): CharacterProfile
    {
        return $this->character;
    }

    /**
     * @param CharacterProfile $character
     *
     * @return GuildMember
     */
    public function setCharacter(CharacterProfile $character): GuildMember
    {
        $this->character = $character;

        return $this;
    }
}