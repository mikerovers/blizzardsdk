<?php

namespace MR\BlizzardSdk\Parser;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class AbstractParser implements ParserInterface
{
    /**
     * @return Serializer
     */
    protected function getSerializer(): Serializer
    {
        return new Serializer($this->getNormalizers(), $this->getEncoders());
    }

    /**
     * @return array
     */
    protected function getEncoders(): array
    {
        return [
            new JsonEncoder()
        ];
    }

    /**
     * @return array
     */
    protected function getNormalizers(): array
    {
        return [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
        ];
    }
}
