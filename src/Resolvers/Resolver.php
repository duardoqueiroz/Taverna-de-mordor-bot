<?php

namespace TavernaDeMordor\Bot\Php\Resolvers;

use Discord\Discord;

abstract class Resolver{
    protected Discord $client;

    function __construct(Discord $client)
    {
        $this->client = $client;
    }
}