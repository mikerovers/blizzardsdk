<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Pets\Pet;
use MR\BlizzardSdk\Parser\AbstractParser;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;

class PetParser extends AbstractParser
{
    /**
     * @param string $json
     * @return Pet
     */
    public function fromArray(string $json): Pet
    {
        $pet = $this->getSerializer()->deserialize($json, Pet::class, 'json');

        return $pet;
    }

    /**
     * @return array
     */
    protected function getNormalizers(): array
    {
        return [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new PropertyNormalizer(),
            new ArrayDenormalizer(),
        ];
    }
}
