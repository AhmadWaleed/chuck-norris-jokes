<?php

namespace AhmadWaleed\ChuckNorrisJokes\Tests;

use AhmadWaleed\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $factory = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $factory->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $jokes = [
            'Chuck Norris counted to infinity... Twice.',
            'Chuck Norris doesn\'t shower, he only takes blood baths.'
        ];

        $factory = new JokeFactory();

        $joke = $factory->getRandomJoke();

        $this->assertContains($joke, $jokes);
    }
}