<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\SessionFactoryInterface;

class CartService
{
    private SessionInterface $session;

    public function __construct(SessionFactoryInterface $sessionFactory)
    {
        $this->session = $sessionFactory->createSession();
    }

    public function getQuantity(int $productId): int
    {
        $cart = $this->session->get('cart', []);
        return $cart[$productId] ?? 0;
    }

    public function add(int $productId, int $quantity): void
    {
        $cart = $this->session->get('cart', []);
        $cart[$productId] = $quantity;
        $this->session->set('cart', $cart);
    }

    public function remove(int $productId): void
    {
        $cart = $this->session->get('cart', []);
        unset($cart[$productId]);
        $this->session->set('cart', $cart);
    }
}
