<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

use MR\BlizzardSdk\Client;
use MR\BlizzardSdk\Model\Collection;
use MR\BlizzardSdk\Model\Wow\Pets\PetAbility;
use MR\BlizzardSdk\Model\Wow\Pets\PetSpecie;
use MR\BlizzardSdk\Parser\CollectionParser;
use MR\BlizzardSdk\Parser\Wow\PetAbilityParser;
use MR\BlizzardSdk\Parser\Wow\PetParser;
use MR\BlizzardSdk\Parser\Wow\PetSpecieParser;

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
     * @var PetAbilityParser
     */
    private $petAbilityParser;

    private $petSpecieParser;

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
        $this->petAbilityParser = new PetAbilityParser();
        $this->petSpecieParser = new PetSpecieParser();
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

    /**
     * @param int $id
     * @return PetAbility
     */
    public function getAbilityById(int $id): PetAbility
    {
        $url = sprintf('%s/ability/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->petAbilityParser->fromArray($result);
    }

    /**
     * @param int $id
     *
     * @return PetSpecie
     */
    public function getSpecieById(int $id): PetSpecie
    {
        $url = sprintf('%s/species/%s', self::PATH, $id);
        $result = $this->client->performRequest($url, $this->locale);

        return $this->petSpecieParser->fromArray($result);
    }
}
