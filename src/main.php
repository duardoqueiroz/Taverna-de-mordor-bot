<?php

use Discord\Discord;

use Dotenv\Dotenv;
use TavernaDeMordor\Bot\Php\Core\DiscordBot;

function main()
{
  $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
  $dotenv->load();
  $config = ['token'=>$_ENV["DISCORD_TOKEN"]];
  $client = new Discord($config);
  $bot = new DiscordBot($client);
  $bot->start();
}

main();
