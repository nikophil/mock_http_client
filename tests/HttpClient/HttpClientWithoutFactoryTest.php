<?php declare(strict_types=1);

namespace App\Tests\HttpClient;

use App\HttpClient\HttpClientWithoutFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class HttpClientWithoutFactoryTest extends TestCase
{
    public function testCallApi()
    {
        $httpClientConsumer = new HttpClientWithoutFactory(
            new MockHttpClient(
                [
                    new MockResponse('{"id":1}'),
                ]
            )
        );

        $this->assertSame(['id' => 1], $httpClientConsumer->callApi());
    }
}
