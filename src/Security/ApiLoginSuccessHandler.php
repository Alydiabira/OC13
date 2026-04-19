<?php

namespace App\Security;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class ApiLoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private JWTTokenManagerInterface $jwtManager
    ) {}

    public function onAuthenticationSuccess($request, $token): JsonResponse
    {
        /** @var User $user */
        $user = $token->getUser();

        // Vérifier si l'utilisateur a activé son accès API
        if (!$user->isApiEnabled()) {
            return new JsonResponse([
                'error' => 'API access disabled'
            ], 403);
        }

        // Retourner le token JWT
        return new JsonResponse([
            'token' => $this->jwtManager->create($user)
        ], 200);
    }
}
