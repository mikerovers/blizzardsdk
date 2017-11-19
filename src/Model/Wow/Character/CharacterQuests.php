<?php

namespace MR\BlizzardSdk\Model\Wow\Character;

class CharacterQuests
{
    private $quests;

    /**
     * @return int[]
     */
    public function getQuests(): array
    {
        return $this->quests;
    }

    /**
     * @param int[] $quests
     *
     * @return CharacterQuests
     */
    public function setQuests(array $quests): CharacterQuests
    {
        $this->quests = $quests;

        return $this;
    }
}