<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\PetParser;

class PetEndpoint
{
    const PATH = 'wow/pet/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var PetParser
     */
    private $petParser;

    /**
     * @var CollectionParser
     */
    private $petCollectionParser;

    /**
     * PetEndpoint constructor.
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->petParser = new PetParser();
        $this->petCollectionParser = new CollectionParser($this->petParser);
    }

    /**
     * @return Collection
     */
    public function getMasterList(): Collection
    {
        $url = sprintf('%s', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->petCollectionParser->fromArray($result);
    }
}
