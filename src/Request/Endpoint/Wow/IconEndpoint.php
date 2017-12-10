<?php

namespace MR\BlizzardSdk\Request\Endpoint\Wow;

class IconEndpoint
{
    const BASE_URL = 'http://media.blizzard.com/wow/icons/%s/%s.jpg';

    public function getIconUrl(string $name, int $size): string
    {
        return sprintf(self::BASE_URL, $size, $name);
    }
}