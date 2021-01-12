<?php

namespace App\Controller;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Editeur;
use App\Entity\Livre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function index(): Response
    {
        $nbAuteurs =count($this->getDoctrine()->getRepository(Auteur::class)
            ->findAll());
        $nbEditeurs =count($this->getDoctrine()->getRepository(Editeur::class)
            ->findAll());
        $nbCategories =count($this->getDoctrine()->getRepository(Categorie::class)
            ->findAll());
        $nbLivres =count($this->getDoctrine()->getRepository(Livre::class)
            ->findAll());
        return $this->render('acceuil/index.html.twig', [
            'title'=>'Acceuil',
            'nbAuteurs' => $nbAuteurs,
            'nbEditeurs' => $nbEditeurs,
            'nbCategories' => $nbCategories,
            'nbLivres' => $nbLivres,
        ]);
    }
}
