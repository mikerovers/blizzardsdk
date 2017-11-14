<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Wow\Guild;
use MR\BlizzardSdk\Parser\Wow\GuildParser;

class GuildEndpoint
{
    const PATH = 'wow/guild';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var GuildParser
     */
    private $guildParser;

    /**
     * GuildEndpoint constructor.
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->guildParser = new GuildParser();
    }

    /**
     * @param string $realm
     * @param string $guildName
     * @return Guild
     */
    public function get(string $realm, string $guildName): Guild
    {
        // TODO Fix url encoding for urls with spaces.
        $url = sprintf("%s/%s/%s", self::PATH, $realm, str_replace('+', '%20', urlencode($guildName)));

        $result = $this->client->performRequest($url, $this->locale);

        return $this->guildParser->fromArray($result);
    }
}
