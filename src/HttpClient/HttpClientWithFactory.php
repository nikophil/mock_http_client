<?php declare(strict_types=1);

namespace App\HttpClient;

final class HttpClientWithFactory
{
    private $client;

    public function __construct(HttpClientFactory $factory)
    {
        $this->client = $factory->createHttpClient();
    }

    public function callApi(): array
    {
        $response = $this->client->request('GET', 'www.google.com');

        return $response->toArray();
    }
}
