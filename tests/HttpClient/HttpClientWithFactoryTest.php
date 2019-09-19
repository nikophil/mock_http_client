<?php declare(strict_types=1);

namespace App\Tests\HttpClient;

use App\HttpClient\HttpClientWithFactory;
use App\HttpClient\HttpClientFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

final class HttpClientWithFactoryTest extends TestCase
{
    public function testCallApi()
    {
        $factory            = $this->createMock(HttpClientFactory::class);
        $httpClientConsumer = new HttpClientWithFactory($factory);

        $factory->expects(self::once())
            ->method('createHttpClient')
            ->willReturn(
                new MockHttpClient(
                    [
                        new MockResponse('{"id":1}')
                    ]
                )
            );

        $this->assertSame(['id' => 1], $httpClientConsumer->callApi());
    }
}
