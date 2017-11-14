<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Zone\Zone;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\ZoneParser;

class ZoneEndpoint
{
    const PATH = 'wow/zone';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var ZoneParser
     */
    private $zoneParser;

    /**
     * @var CollectionParser
     */
    private $zoneCollectionParser;

    /**
     * ZoneEndpoint constructor.
     *
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client               = $client;
        $this->locale               = $locale;
        $this->zoneParser           = new ZoneParser();
        $this->zoneCollectionParser = new CollectionParser($this->zoneParser);
    }

    public function getMasterList(): Collection
    {
        $url    = sprintf('%s/', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->zoneCollectionParser->fromArray($result);
    }

    /**
     * @param int $id
     *
     * @return Zone
     */
    public function get(int $id): Zone
    {
        $url    = sprintf('%s/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->zoneParser->fromArray($result);
    }
}