<?php

namespace MR\BlizzardSdk\Model\Wow;

class TooltipParams
{
    private $timewalkerLevel;

    /**
     * @return int
     */
    public function getTimewalkerLevel(): int
    {
        return $this->timewalkerLevel;
    }

    /**
     * @param int $timewalkerLevel
     * @return TooltipParams
     */
    public function setTimewalkerLevel(int $timewalkerLevel): TooltipParams
    {
        $this->timewalkerLevel = $timewalkerLevel;

        return $this;
    }

}
