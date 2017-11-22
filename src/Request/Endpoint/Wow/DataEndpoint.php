<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Parser\SubCollectionParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterClassParser;
use MR\BlizzardSdk\Parser\Wow\Character\CharacterRaceParser;
use MR\BlizzardSdk\Parser\Wow\Data\BattlegroupParser;
use MR\BlizzardSdk\Parser\Wow\ItemClassParser;
use MR\BlizzardSdk\Parser\Wow\PetTypeParser;

class DataEndpoint
{
    const PATH = 'wow/data';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var SubCollectionParser
     */
    private $battlegroupParser;

    /**
     * @var SubCollectionParser
     */
    private $characterRaceParser;

    /**
     * @var SubCollectionParser
     */
    private $characterClassParser;

    /**
     * @var SubCollectionParser
     */
    private $itemClassParser;

    /**
     * @var SubCollectionParser
     */
    private $petTypeParser;

    public function __construct(Client $client, string $locale)
    {
        $this->client = $client;
        $this->locale = $locale;
        $this->battlegroupParser = new SubCollectionParser(new BattlegroupParser(), 'battlegroups');
        $this->characterRaceParser = new SubCollectionParser(new CharacterRaceParser(), 'races');
        $this->characterClassParser = new SubCollectionParser(new CharacterClassParser(), 'classes');
        $this->itemClassParser = new SubCollectionParser(new ItemClassParser(), 'classes');
        $this->petTypeParser = new SubCollectionParser(new PetTypeParser(), 'petTypes');
    }

    /**
     * @return Collection
     */
    public function getBattlegroups(): Collection
    {
        $url = sprintf('%s/%s/', self::PATH, 'battlegroups');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->battlegroupParser->fromArray($result);
    }

    /**
     * @return Collection
     */
    public function getCharacterRaces(): Collection
    {
        $url = sprintf('%s/character/%s', self::PATH, 'races');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->characterRaceParser->fromArray($result);
    }

    /**
     * @return Collection
     */
    public function getCharacterClasses(): Collection
    {
        $url = sprintf('%s/character/%s', self::PATH, 'classes');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->characterClassParser->fromArray($result);
    }

    public function getItemClasses(): Collection
    {
        $url = sprintf('%s/item/%s', self::PATH, 'classes');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->itemClassParser->fromArray($result);
    }

    public function getPetTypes(): Collection
    {
        $url = sprintf('%s/pet/%s', self::PATH, 'types');
        $result = $this->client->performRequest($url, $this->locale);

        return $this->petTypeParser->fromArray($result);
    }
}