<?php

namespace App\Controller;
use App\Repository\LivreRepository;
use App\Repository\AuteurRepository;
use App\Repository\CategorieRepository;
use App\Repository\EditeurRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(LivreRepository $livreRepository,AuteurRepository $AuteurRepository): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'title'=>'Book',
            'livres' => $livreRepository->findAll(),
            'auteurs' => $AuteurRepository->findAll(),

        ]);
    }
    
    /**
     * @Route("/library", name="profilee")
     */
    public function library(LivreRepository $livreRepository,AuteurRepository $AuteurRepository): Response
    {
        return $this->render('user/user.html.twig', [
            'controller_name' => 'ProfileController',
            'title'=>'Book',
            'livres' => $livreRepository->findAll(),
            'auteurs' => $AuteurRepository->findAll(),

        ]);
    }
    
}
