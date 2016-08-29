<?php

require 'vendor/autoload.php';

class ReditClient
{
    public static function main()
    {
        echo 'main' . PHP_EOL;
    }

}

Predis\Autoloader::register();
ReditClient::main();