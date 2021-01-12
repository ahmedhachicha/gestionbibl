<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivreRepository;
use App\Service\CartService;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(SessionInterface $session,LivreRepository $LivreRepository, CartService $cartservice)
    {
        $panierWithData = $cartservice->getFullCart();
        $total=$cartservice->getTotal();
        return $this->render('cart/index.html.twig', [
            'items'=>$panierWithData,
            'total'=>$total
        ]);
    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add($id, CartService $cartservice)
    {
        $cartservice->add($id);
        
        return $this->redirectToRoute("cart");
        
    }
    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function delete($id, CartService $cartservice)
    {
        $cartservice->delete($id);
        return $this->redirectToRoute("cart");
    }
}
