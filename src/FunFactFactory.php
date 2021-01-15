<?php


namespace AMacSmith\FunFacts;

use Exception;
use GuzzleHttp\Client;
use RuntimeException;

class FunFactFactory
{
    const FUN_FACT_API_ENDPOINT = 'https://uselessfacts.jsph.pl/random.json?language=en';

    /**
     * JokeFactory constructor.
     * @param Client $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @return mixed
     */
    public function getFunFact()
    {
        $response = $this->client->get(self::FUN_FACT_API_ENDPOINT);
        return json_decode($response->getBody()->getContents())->text;
    }
}