<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\RealmParser;

class RealmEndpoint
{
    const PATH = 'wow/realm/status';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    private $realmParser;

    private $realmCollectionParser;

    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->realmParser = new RealmParser();
        $this->realmCollectionParser = new CollectionParser($this->realmParser);
    }

    public function getMasterList(): Collection
    {
        $url = sprintf('%s', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->realmCollectionParser->fromArray($result);
    }
}