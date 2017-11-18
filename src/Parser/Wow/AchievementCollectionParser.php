<?php

namespace MR\BlizzardSdk\Parser\Wow;

use MR\BlizzardSdk\Model\Wow\Achievement\AchievementCollection;
use MR\BlizzardSdk\Parser\AbstractParser;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class AchievementCollectionParser extends AbstractParser
{
    /**
     * @param string $json
     *
     * @return AchievementCollection
     */
    public function fromArray(string $json): AchievementCollection
    {
        $achievementCollect = json_decode($json, true);
        $achievementCollections = $this->getSerializer()->deserialize(json_encode($achievementCollect['achievements']), AchievementCollection::class . '[]', 'json');

        var_dump($achievementCollections);

        return $achievementCollections;
    }

    public function getNormalizers(): array
    {
        return [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new ArrayDenormalizer()
        ];
    }
}