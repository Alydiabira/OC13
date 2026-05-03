<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiAuthController
{
    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    public function login()
    {
        throw new \Exception('This should never be reached.');
    }
}
