<?php

namespace MR\BlizzardSdk;

use GuzzleHttp\Psr7\Request;
use Http\Client\HttpClient;

class Client
{
    const BASEURL = 'https://%s.api.battle.net/%s?%s';

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
     * @return string
     */
    public function performRequest(
        string $url,
        string $locale,
        array $urlParams = [],
        array $requestParams = []
    ): string
    {
        $parameterString = $this->generateParameterString($urlParams);
        $url             = $this->generateUrl($locale, $url, $parameterString);

        $request = new Request('GET', $url, $requestParams);
        $result = $this->client->sendRequest($request);

        return $result->getBody()->getContents();
    }


    /**
     * @param array $parameters
     *
     * @return string
     */
    private function generateParameterString(array $parameters): string
    {
        $parameters['apikey'] = $this->accessKey;

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
            $parameters
        );
    }
}
