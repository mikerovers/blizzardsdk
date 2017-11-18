<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Achievement\Achievement;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\AchievementCollectionParser;
use MR\BlizzardSdk\Parser\Wow\AchievementParser;

class AchievementEndpoint
{
    const PATH = 'wow/achievement';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var AchievementParser
     */
    private $achievementParser;

    /**
     * @var CollectionParser
     */
    private $achievementCollectionParser;

    private $specialAchievementCollectionParser;

    /**
     * AchievementEndpoint constructor.
     *
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->achievementParser = new AchievementParser();
        $this->specialAchievementCollectionParser = new AchievementCollectionParser();
        $this->achievementCollectionParser = new CollectionParser($this->specialAchievementCollectionParser);
    }

    /**
     * @param int $id
     *
     * @return Achievement
     */
    public function get(int $id): Achievement
    {
        $url = sprintf('%s/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->achievementParser->fromArray($result);
    }

    public function getMasterList(): Collection
    {
        $url = sprintf('wow/data/character/achievements');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->specialAchievementCollectionParser->fromArray($result);
    }
}