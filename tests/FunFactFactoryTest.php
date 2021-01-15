<?php


namespace AMacsmith\FunFacts\Tests;

use AMacSmith\FunFacts\FunFactFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class FunFactFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_fact()
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(200, [], '{
                "id": "588b152b-4938-41b6-99e7-6a6a8f737afe",
                "text": "A shark is the only fish that can blink with both eyes.",
                "source":"djtech.net",
                "source_url": "http://www.djtech.net/humor/useless_facts.htm",
                "language": "en",
                "permalink": "https://uselessfacts.jsph.pl/242a7998-f858-4a22-affa-a7aede81d76d"
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $facts = new FunFactFactory($client);

        $fact = $facts->getFunFact();

        $this->assertSame('A shark is the only fish that can blink with both eyes.', $fact);
    }
}