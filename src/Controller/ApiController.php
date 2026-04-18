<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api/products', name: 'api_products', methods: ['GET'])]
    public function products(ProductRepository $repo): JsonResponse
    {
        $products = $repo->findAll();

        $data = array_map(function ($product) {
            return [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'shortDescription' => $product->getShortDescription(),
                'fullDescription' => $product->getFullDescription(),
                'price' => $product->getPrice(),
                'picture' => $product->getPicture(),
            ];
        }, $products);

        return new JsonResponse($data, 200);
    }
}
