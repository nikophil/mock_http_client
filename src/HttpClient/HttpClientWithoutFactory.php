<?php declare(strict_types=1);

namespace App\HttpClient;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class HttpClientWithoutFactory
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function callApi(): array
    {
        $response = $this->client->request('GET', 'http://127.0.0.1:8000/test');

        return $response->toArray();
    }
}
