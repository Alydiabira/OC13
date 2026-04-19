<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class ApiLoginFailureHandler implements AuthenticationFailureHandlerInterface
{
    public function onAuthenticationFailure($request, $exception): JsonResponse
    {
        return new JsonResponse([
            'error' => 'Invalid credentials'
        ], 401);
    }
}
