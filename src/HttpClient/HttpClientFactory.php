<?php declare(strict_types=1);

namespace App\HttpClient;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClientFactory
{
    public function createHttpClient(): HttpClientInterface
    {
        $client = HttpClient::create(
            [
                'headers' => [
                    'Authorization' => 'token my_token',
                ],
            ]
        );

        return $client;
    }
}
