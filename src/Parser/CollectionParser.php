<?php

namespace MR\BlizzardSdk\Parser;

use MR\BlizzardSdk\Model\Collection;

class CollectionParser extends AbstractParser
{
    private $parser;

    /**
     * CollectionParser constructor.
     *
     * @param ParserInterface $parser
     */
    public function __construct(ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param string $json
     *
     * @return Collection
     */
    public function fromArray(string $json): Collection
    {
        $objects = [];
        $data    = json_decode($json, true);

        foreach ($data['bosses'] as $object) {
            $object = $this->parser->fromArray(json_encode($object));

            $objects[] = $object;
        }

        return new Collection($objects, count($objects));
    }
}