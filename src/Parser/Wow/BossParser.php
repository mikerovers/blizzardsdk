<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Boss;
use MR\BlizzardSdk\Parser\AbstractParser;

class BossParser extends AbstractParser
{
    /**
     * @param array $json
     * @return Boss
     */
    public function fromArray(array $json): Boss
    {
        return $this->getSerializer()->deserialize($json, Boss::class, 'json');
    }
}
