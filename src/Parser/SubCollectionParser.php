<?php

namespace MR\BlizzardSdk\Parser;

use MR\BlizzardSdk\Model\Collection;

class SubCollectionParser extends CollectionParser
{
    /**
     * @var string
     */
    private $subCollection;

    /**
     * SubCollectionParser constructor.
     *
     * @param ParserInterface $parser
     * @param string $subCollection
     */
    public function __construct(ParserInterface $parser, string $subCollection)
    {
        parent::__construct($parser);
        $this->subCollection = $subCollection;
    }

    /**
     * @param string $json
     *
     * @return Collection
     */
    public function fromArray(string $json): Collection
    {
        $objects = [];
        $data = json_decode(trim($json), true);
        $data = $data[$this->subCollection];

        foreach ($data as $object) {
            $object = $this->parser->fromArray(json_encode($object));

            $objects[] = $object;
        }

        return new Collection($objects, count($objects));
    }
}