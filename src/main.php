<?php

use Discord\Discord;

use Dotenv\Dotenv;
use TavernaDeMordor\Bot\Php\Core\DiscordBot;

function main()
{
  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();
  $client = new Discord([$_ENV["DISCORD_TOKEN"]]);
  $bot = new DiscordBot($client);
  $bot->start();
}

main();
