<?php

namespace MR\BlizzardSdk\Test;

use GuzzleHttp\Psr7\Response;
use MR\BlizzardSdk\Client;
use PHPUnit\Framework\TestCase;
use function GuzzleHttp\Psr7\parse_response;

class AbstractTest extends TestCase
{
    const ACCESS_KEY = "test_key";

    protected function loadMockResponse(string $name): Response
    {
        $dir = sprintf("%s/../mock/%s", __DIR__, $name);

        return parse_response(file_get_contents($dir));
    }
    protected function createClient(Response $mockedResponse): Client
    {
        $httpClient = new \Http\Mock\Client();
        $httpClient->addResponse($mockedResponse);

        return new Client($httpClient, self::ACCESS_KEY);
    }
}
