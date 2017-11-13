<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Boss;
use MR\BlizzardSdk\Model\Wow\Npc;
use MR\BlizzardSdk\Parser\AbstractParser;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

class BossParser extends AbstractParser
{
    /**
     * @var PropertyAccessorInterface
     */
    private $accessor;

    /**
     * BossParser constructor.
     */
    public function __construct()
    {
        $this->accessor = PropertyAccess::createPropertyAccessorBuilder()->enableMagicCall()->getPropertyAccessor();
    }

    /**
     * @param string $json
     * @return Boss
     */
    public function fromArray(string $json): Boss
    {
        $boss       = $this->getSerializer()->deserialize($json, Boss::class, 'json');
        $npcsString = json_encode($boss->getNpcs());

        $npcs = $this->getSerializer()->deserialize($npcsString, Npc::class . '[]', 'json');
        $boss->setNpcs($npcs);

        return $boss;
    }
}