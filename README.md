# Test Redis

This is an example of using [Redis](http://redis.io/) server in php.

## Install redis server on OSX

Tested on Yosemite. We are using [Brew](http://brew.sh/) to simplify installation procedure.
PHP client library used is [predis](https://phppackages.org/p/predis/predis)

    brew install redis
    brew services start redis

## Run

    php index.php
