<?php

namespace MR\BlizzardSdk;

use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;
use Psr\Http\Message\ResponseInterface;

class Client
{
    const BASEURL = 'https://%s.api.battle.net/%s?%s&apikey=%s';

    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var string
     */
    private $accessKey;

    /**
     * Client constructor.
     *
     * @param HttpClient $client
     * @param string $accessKey
     */
    public function __construct(Httpclient $client, string $accessKey)
    {
        $this->client = $client;
        $this->accessKey = $accessKey;
    }

    /**
     * @param string $url
     * @param string $locale
     * @param array $requestParams
     * @param array $urlParams
     *
     * @return array
     */
    public function performRequest(string $url, string $locale, array $requestParams = [], array $urlParams = []): array
    {
        $parameterString = $this->generateParameterString($urlParams);
        $url = $this->generateUrl($url, $locale, $parameterString);

        $request = new Request('GET', $url, $requestParams);
        $result = $this->client->sendRequest($request);

        return $this->parseResponse($result);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    public function parseResponse(ResponseInterface $response): array
    {
        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    /**
     * @param array $parameters
     *
     * @return string
     */
    private function generateParameterString(array $parameters): string
    {
        return http_build_query($parameters);
    }

    /**
     * @param string $locale
     * @param string $url
     * @param string $parameters
     *
     * @return string
     */
    private function generateUrl(string $locale, string $url, string $parameters): string
    {
        return sprintf(self::BASEURL,
            $locale,
            $url,
            $parameters,
            $this->accessKey
        );
    }
}