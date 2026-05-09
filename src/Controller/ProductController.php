<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products/{id}', name: 'app_product_show')]
    public function show(Product $product, CartService $cartService): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (!$user->isApiEnabled()) {
            $this->addFlash('error', 'Vous devez activer votre accès API pour consulter les produits.');
            return $this->redirectToRoute('app_account');
        }

        $quantity = $cartService->getQuantity($product->getId());

        return $this->render('product/show.html.twig', [
            'product' => $product,
            'quantity' => $quantity
        ]);
    }

    #[Route('/produits', name: 'app_products')]
    public function index(ProductRepository $repo): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (!$user->isApiEnabled()) {
            $this->addFlash('error', 'Vous devez activer votre accès API pour voir la liste des produits.');
            return $this->redirectToRoute('app_account');
        }

        return $this->render('product/index.html.twig', [
            'products' => $repo->findAll(),
        ]);
    }
}
