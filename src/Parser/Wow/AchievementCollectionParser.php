<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Achievement\AchievementCollection;
use MR\BlizzardSdk\Parser\AbstractParser;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;

class AchievementCollectionParser extends AbstractParser
{
    public function fromArray(string $json)
    {
        $achievementCollection = $this->getSerializer()->deserialize($json, AchievementCollection::class, 'json');

        return $achievementCollection;
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