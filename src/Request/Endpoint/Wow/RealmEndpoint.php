<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Realm;
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

    /**
     * @var RealmParser
     */
    private $realmParser;

    /**
     * @var CollectionParser
     */
    private $realmCollectionParser;

    /**
     * RealmEndpoint constructor.
     *
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->realmParser = new RealmParser();
        $this->realmCollectionParser = new CollectionParser($this->realmParser);
    }

    /**
     * @return Realm[]
     */
    public function getMasterList(): array
    {
        $url = sprintf('%s', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->realmCollectionParser->fromArray($result)->getItems();
    }
}