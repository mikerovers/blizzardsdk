<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Parser\SubCollectionParser;
use MR\BlizzardSdk\Parser\Wow\MountParser;

class MountEndpoint
{
    const PATH = "wow/mount";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    private $mountCollectionParser;

    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->mountCollectionParser = new SubCollectionParser(new MountParser(), 'mounts');
    }

    public function getMasterList(): Collection
    {
        $url = sprintf('%s/', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->mountCollectionParser->fromArray($result);
    }
}