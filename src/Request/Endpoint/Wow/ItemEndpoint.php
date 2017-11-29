<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Wow\Items\Item;
use MR\BlizzardSdk\Model\Wow\Items\ItemSet;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\ItemParser;
use MR\BlizzardSdk\Parser\Wow\ItemSetParser;

class ItemEndpoint
{
    const PATH = "wow/item";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var ItemParser
     */
    private $itemParser;

    /**
     * @var CollectionParser
     */
    private $itemCollectionParser;

    /**
     * @var ItemSetParser
     */
    private $itemSetParser;

    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->itemParser = new ItemParser();
        $this->itemCollectionParser = new CollectionParser($this->itemParser);
        $this->itemSetParser = new ItemSetParser();
    }

    /**
     * @param int $id
     *
     * @return Item
     */
    public function get(int $id): Item
    {
        $url = sprintf('%s/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->itemParser->fromArray($result);
    }

    /**
     * @param int $id
     *
     * @return ItemSet
     */
    public function getItemSet(int $id): ItemSet
    {
        $url = sprintf('%s/set/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->itemSetParser->fromArray($result);
    }
}