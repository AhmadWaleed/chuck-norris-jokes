<?php

namespace AhmadWaleed\ChuckNorrisJokes;

class JokeFactory
{
    /**
     * @var array
     */
    private $jokes = [
        'Chuck Norris counted to infinity... Twice.',
        'Chuck Norris doesn\'t shower, he only takes blood baths.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke(): string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
