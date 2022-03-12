<?php

use Discord\Discord;
use TavernaDeMordor\Bot\Core\DiscordBot;
use Dotenv\Dotenv;

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
