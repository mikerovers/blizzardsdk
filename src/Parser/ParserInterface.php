<?php

namespace MR\BlizzardSdk\Parser;

interface ParserInterface
{
    public function fromArray(string $json);
}
