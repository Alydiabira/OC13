<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/panier', name: 'app_cart')]
    public function index(CartRepository $cartRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $cartRepository->findOneBy(['user' => $user]);

        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
        ]);
    }

    #[Route('/panier/ajouter/{id}', name: 'app_cart_add', methods: ['POST'])]
    public function add(
        Product $product,
        Request $request,
        CartRepository $cartRepository,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer ou créer le panier
        $cart = $cartRepository->findOneBy(['user' => $user]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setUser($user);
            $em->persist($cart);
        }

        $quantity = (int) $request->request->get('quantity', 1);

        // Vérifier si le produit est déjà dans le panier
        $cartItem = $cartItemRepository->findOneBy([
            'cart' => $cart,
            'product' => $product
        ]);

        if ($quantity <= 0) {
            if ($cartItem) {
                $em->remove($cartItem);
                $em->flush();
            }
            return $this->redirectToRoute('app_cart');
        }

        if (!$cartItem) {
            $cartItem = new CartItem();
            $cartItem->setCart($cart);
            $cartItem->setProduct($product);
            $cartItem->setQuantity($quantity);
            $em->persist($cartItem);
        } else {
            $cartItem->setQuantity($quantity);
        }

        $em->flush();

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/panier/vider', name: 'app_cart_clear')]
    public function clear(
        CartRepository $cartRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $cartRepository->findOneBy(['user' => $user]);

        if ($cart) {
            foreach ($cart->getCartItems() as $item) {
                $em->remove($item);
            }
            $em->flush();
        }

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/panier/valider', name: 'app_cart_validate')]
    public function validate(
        CartRepository $cartRepository,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $cartRepository->findOneBy(['user' => $user]);

        if ($cart && !$cart->getCartItems()->isEmpty()) {

            // 1. Créer la commande
            $order = new Order();
            $order->setUser($user);
            $order->setCreatedAt(new \DateTimeImmutable());

            // 2. Générer un numéro de commande AVANT persist()
            $orderNumber = str_pad((string) random_int(1, 999999), 6, '0', STR_PAD_LEFT);
            $order->setNumber($orderNumber);

            $total = 0;

            // 3. Créer les OrderItem
            foreach ($cart->getCartItems() as $cartItem) {

                $orderItem = new OrderItem();
                $orderItem->setOrderRef($order);
                $orderItem->setProduct($cartItem->getProduct());
                $orderItem->setQuantity($cartItem->getQuantity());
                $orderItem->setPrice($cartItem->getProduct()->getPrice());

                //  total de la ligne
                $lineTotal = $cartItem->getProduct()->getPrice() * $cartItem->getQuantity();
                $orderItem->setTotal($lineTotal);

                $total += $lineTotal;

                $em->persist($orderItem);
            }


            // 4. Total
            $order->setTotalPrice($total);

            // 5. On persiste la commande APRÈS setNumber()
            $em->persist($order);

            // 6. Vider le panier
            foreach ($cart->getCartItems() as $item) {
                $em->remove($item);
            }

            $em->flush();
        }

        $this->addFlash('success', 'Votre commande a été validée avec succès !');

        return $this->redirectToRoute('app_cart');
    }
}
