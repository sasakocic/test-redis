<?php

/**
 * Client for Redis
 */
class ReditClient
{
    /** @var Predis\Client */
    private $client;

    /**
     * @param \Predis\Client $client
     */
    public function __construct(Predis\Client $client)
    {
        $this->client = $client;
    }

    /**
     *
     */
    public function main()
    {
        echo 'main' . PHP_EOL;
        //$this->client->set('visitors', 1);
        $this->client->incr('visitors');
        $this->client->executeRaw(['INCR', 'visitors']);
        echo "Visitors: {$this->client->get('visitors')}\n";
    }

}
