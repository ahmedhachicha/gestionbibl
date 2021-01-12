<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * @Route("/oldadmin/ livre")
 */
class LivreController extends AbstractController
{
    /**
     * @Route("/", name="livre_index", methods={"GET"})
     */
    public function index(LivreRepository $livreRepository): Response
    {
        return $this->render('livre/index.html.twig', [
            'title'=>'Book',
            'livres' => $livreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="livre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $livre = new Livre();
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('images')->getData();
           
      //  foreach($images as $image){
                        // On génère un nouveau nom de fichier
                        $fichier = md5(uniqid()).'.'.$image->guessExtension();
        
                        // On copie le fichier dans le dossier uploads
                        $image->move(
                            $this->getParameter('images_directory'),
                            $fichier
                        );
                        
                        $livre->setPreviewName($fichier);
                   // }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($livre);
            $entityManager->flush();

            return $this->redirectToRoute('livre_index');
        }

        return $this->render('livre/new.html.twig', [
            'title'=>'Category',
            'livre' => $livre,
            'form' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/{id}", name="livre_show", methods={"GET"})
     */
    public function show(Livre $livre): Response
    {
        return $this->render('livre/show.html.twig', [
            'title'=>'Category',
            'livre' => $livre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="livre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Livre $livre): Response
    {
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('images')->getData();
           
      //  foreach($images as $image){
                        // On génère un nouveau nom de fichier
                        $fichier = md5(uniqid()).'.'.$image->guessExtension();
        
                        // On copie le fichier dans le dossier uploads
                        $image->move(
                            $this->getParameter('images_directory'),
                            $fichier
                        );
                        
                        $livre->setPreviewName($fichier);
                   // }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('livre_index');
        }

        return $this->render('livre/edit.html.twig', [
            'title'=>'Category',
            'livre' => $livre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Livre $livre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($livre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('livre_index');
    }
}
