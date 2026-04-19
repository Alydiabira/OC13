<?php

namespace App\Controller;

use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccountController extends AbstractController
{
    #[Route('/mon-compte', name: 'app_account')]
    public function index(OrderRepository $orderRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $orders = $orderRepository->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );

        return $this->render('account/index.html.twig', [
            'orders' => $orders,
            'user' => $user,
        ]);
    }

    #[Route('/mon-compte/api/toggle', name: 'app_account_toggle_api')]
    public function toggleApi(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $user->setApiEnabled(!$user->isApiEnabled());
        $em->flush();

        $this->addFlash(
            'success',
            $user->isApiEnabled()
                ? 'Votre accès API a été activé.'
                : 'Votre accès API a été désactivé.'
        );

        return $this->redirectToRoute('app_account');
    }

    #[Route('/mon-compte/supprimer', name: 'app_account_delete')]
    public function deleteAccount(
        EntityManagerInterface $em,
        CartRepository $cartRepository
    ): Response {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Supprimer le panier et ses items
        $cart = $cartRepository->findOneBy(['user' => $user]);

        if ($cart) {
            foreach ($cart->getCartItems() as $item) {
                $em->remove($item);
            }
            $em->remove($cart);
        }

        //  Supprimer l'utilisateur (les commandes sont supprimées via cascade)
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'Votre compte a été supprimé avec succès.');

        return $this->redirectToRoute('app_home');
    }
}
