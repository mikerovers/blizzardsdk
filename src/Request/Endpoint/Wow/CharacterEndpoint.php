<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Character\CharacterAchievements;
use MR\BlizzardSdk\Model\Wow\Character\CharacterAppearance;
use MR\BlizzardSdk\Model\Wow\Character\CharacterMounts;
use MR\BlizzardSdk\Model\Wow\Character\CharacterPets;
use MR\BlizzardSdk\Model\Wow\Character\CharacterProfile;
use MR\BlizzardSdk\Model\Wow\Character\CharacterQuests;
use MR\BlizzardSdk\Model\Wow\Character\CharacterStats;
use MR\BlizzardSdk\Parser\SubCollectionParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterAchievementsParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterAppearanceParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterMountParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterPetParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterPetSlotParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterProfileParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterQuestsParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterReputationParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterStatsParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterTitleParser;

class CharacterEndpoint
{
    const PATH = "wow/character";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var CharacterProfileParser
     */
    private $characterProfileParser;

    /**
     * @var CharacterStatsParser
     */
    private $characterStatsParser;

    /**
     * @var CharacterTitleParser
     */
    private $characterTitleParser;

    /**
     * @var SubCollectionParser
     */
    private $characterTitleCollectionParser;

    /**
     * @var SubCollectionParser
     */
    private $characterReputationCollectionParser;

    /**
     * @var CharacterQuestsParser
     */
    private $characterQuestsParser;

    /**
     * @var CharacterPetParser
     */
    private $characterPetParser;

    /**
     * @var SubCollectionParser
     */
    private $characterPetSlotCollectionParser;

    /**
     * @var CharacterMountParser
     */
    private $characterMountParser;

    /**
     * @var CharacterAchievements
     */
    private $characterAchievementsParser;

    /**
     * @var CharacterAppearanceParser
     */
    private $characterAppearanceParser;

    /**
     * CharacterEndpoint constructor.
     *
     * @param Client $client
     * @param string $locale
     */
    public function __construct(Client $client, string $locale)
    {
        $this->client                              = $client;
        $this->locale                              = $locale;
        $this->characterProfileParser              = new CharacterProfileParser();
        $this->characterStatsParser                = new CharacterStatsParser();
        $this->characterTitleParser                = new CharacterTitleParser();
        $this->characterTitleCollectionParser      = new SubCollectionParser($this->characterTitleParser, 'titles');
        $this->characterReputationCollectionParser = new SubCollectionParser(new CharacterReputationParser(), 'reputation');
        $this->characterQuestsParser               = new CharacterQuestsParser();
        $this->characterPetParser                  = new CharacterPetParser();
        $this->characterPetSlotCollectionParser    = new SubCollectionParser(new CharacterPetSlotParser(), 'petSlots');
        $this->characterMountParser                = new CharacterMountParser();
        $this->characterAchievementsParser         = new CharacterAchievementsParser();
        $this->characterAppearanceParser           = new CharacterAppearanceParser();
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterProfile
     */
    public function getCharacterProfile(string $realm, string $characterName): CharacterProfile
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->characterProfileParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterStats
     */
    public function getCharacterStats(string $realm, string $characterName): CharacterStats
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'stats'
        ]);

        return $this->characterStatsParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return Collection
     */
    public function getCharacterTitles(string $realm, string $characterName): Collection
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'titles'
        ]);

        return $this->characterTitleCollectionParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return Collection
     */
    public function getCharacterReputation(string $realm, string $characterName): Collection
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'reputation'
        ]);

        return $this->characterReputationCollectionParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterQuests
     */
    public function getCharacterQuests(string $realm, string $characterName): CharacterQuests
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'quests'
        ]);

        return $this->characterQuestsParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterPets
     */
    public function getCharacterPets(string $realm, string $characterName): CharacterPets
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'pets'
        ]);

        return $this->characterPetParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return Collection
     */
    public function getCharacterPetSlots(string $realm, string $characterName): Collection
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'petSlots'
        ]);

        return $this->characterPetSlotCollectionParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterMounts
     */
    public function getCharacterMounts(string $realm, string $characterName): CharacterMounts
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'mounts'
        ]);

        return $this->characterMountParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterAchievements
     */
    public function getCharacterAchievements(string $realm, string  $characterName): CharacterAchievements
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'achievements'
        ]);

        return $this->characterAchievementsParser->fromArray($result);
    }

    /**
     * @param string $realm
     * @param string $characterName
     *
     * @return CharacterAppearance
     */
    public function getCharacterAppearence(string $realm, string  $characterName): CharacterAppearance
    {
        $url = sprintf('%s/%s/%s', self::PATH, $realm, $characterName);
        $result = $this->client->performRequest($url, $this->locale, [
            'fields' => 'appearance'
        ]);

        return $this->characterAppearanceParser->fromArray($result);
    }
}