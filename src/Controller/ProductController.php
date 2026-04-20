<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products/{id}', name: 'app_product_show')]
    public function show(Product $product, CartService $cartService): Response
    {
        $quantity = $cartService->getQuantity($product->getId());

        return $this->render('product/show.html.twig', [
            'product' => $product,
            'quantity' => $quantity
        ]);
    }
}
