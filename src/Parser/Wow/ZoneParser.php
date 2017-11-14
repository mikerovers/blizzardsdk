<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Boss;
use MR\BlizzardSdk\Model\Wow\Zone\Zone;
use MR\BlizzardSdk\Parser\AbstractParser;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ZoneParser extends AbstractParser
{
    /**
     * @var BossParser
     */
    private $bossParser;

    /**
     * ZoneParser constructor.
     */
    public function __construct()
    {
        $this->bossParser = new BossParser();
    }

    /**
     * @param string $json
     *
     * @return Zone
     */
    public function fromArray(string $json): Zone
    {
        $zone = $this->getSerializer()->deserialize($json, Zone::class, 'json');
        $zone->setBosses($this->parseBosses($zone->getBosses()));

        return $zone;
    }

    /**
     * @param Boss[] $bosses
     *
     * @return array
     */
    private function parseBosses(array $bosses): array
    {
        $bossObjects = [];

        foreach ($bosses as $boss) {
            $bossObjects[] = $this->bossParser->fromArray(json_encode($boss));
        }

        return $bossObjects;
    }

    /**
     * @return array
     */
    protected function getNormalizers(): array
    {
        return [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new ArrayDenormalizer(),
            new GetSetMethodNormalizer(),
        ];
    }
}