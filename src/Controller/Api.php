<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class Api
{
    /**
     * @Route("/test")
     */
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(['id' => 5]);
    }
}
