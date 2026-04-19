<?php

namespace App\Controller\Api;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProductApiController extends AbstractController
{
    #[Route('/api/products', name: 'api_products', methods: ['GET'])]
    public function products(ProductRepository $repo): JsonResponse
    {
        $products = $repo->findAll();

        $data = array_map(function ($p) {
            return [
                'id' => $p->getId(),
                'name' => $p->getName(),
                'shortDescription' => $p->getShortDescription(),
                'fullDescription' => $p->getFullDescription(),
                'price' => $p->getPrice(),
                'picture' => $p->getPicture(),
            ];
        }, $products);

        return new JsonResponse($data, 200);
    }
}
