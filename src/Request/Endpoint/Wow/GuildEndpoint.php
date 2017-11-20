<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Guild;
use MR\BlizzardSdk\Parser\SubCollectionParser;
use MR\BlizzardSdk\Parser\Wow\GuildMemberParser;
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
     * @var SubCollectionParser
     */
    private $guildMemberParser;

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
        $this->guildMemberParser = new SubCollectionParser(new GuildMemberParser(), 'members');
    }

    /**
     * @param string $realm
     * @param string $guildName
     * @return Guild
     */
    public function get(string $realm, string $guildName): Guild
    {
        $url = sprintf("%s/%s/%s", self::PATH, $realm, rawurlencode($guildName));
        $result = $this->client->performRequest($url, $this->locale);

        return $this->guildParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $guildName
     *
     * @return Collection
     */
    public function getMembers(string $realm, string $guildName): Collection
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, rawurlencode($guildName));
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'members'
        ]);

        return $this->guildMemberParser->fromArray($result);
    }
}
