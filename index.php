<?php

require 'vendor/autoload.php';
require 'ReditClient.php';

//Predis\Autoloader::register();

$client = new ReditClient(new Predis\Client());
$client->main();