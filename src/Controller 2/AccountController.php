<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

        return $this->redirectToRoute('app_account');
    }

    #[Route('/mon-compte/supprimer', name: 'app_account_delete')]
    public function deleteAccount(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Supprimer l'utilisateur supprime aussi ses commandes (cascade)
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }
}
