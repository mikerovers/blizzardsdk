<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Boss;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\BossParser;

class BossEndpoint
{
    const PATH = 'wow/boss';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var BossParser
     */
    private $bossParser;

    /**
     * @var CollectionParser
     */
    private $bossCollectionParser;

    /**
     * BossEndpoint constructor.
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client               = $client;
        $this->locale               = $locale;
        $this->bossParser           = new BossParser();
        $this->bossCollectionParser = new CollectionParser($this->bossParser);
    }

    /**
     * @return Collection
     */
    public function getMasterList(): Collection
    {
        $url    = sprintf('%s/', self::PATH);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->bossCollectionParser->fromArray($result);
    }

    /**
     * @param int $id
     * @return Boss
     */
    public function get(int $id): Boss
    {
        $url = sprintf('%s/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->bossParser->fromArray($result);
    }
}
