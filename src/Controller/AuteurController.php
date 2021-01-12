<?php

namespace App\Controller;

use App\Form\AuteurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManager;
use App\Entity\Auteur;

/**
 * @Route("/oldadmin/auteur")
 */
class AuteurController extends AbstractController
{
    
    /**
     * @Route("/",name="index")
     */
    public function index(): Response
    {
        $repAuteur=$this->getDoctrine()->getRepository(Auteur::class);
        $autors=$repAuteur->findAll();

        return $this->render('auteur/index.html.twig', [
            'title'=>'Autor',
            'liste' => $autors,
        ]);
    }
     /**
     * @Route("/new",name="new_autor")
     */
    public function new(Request $request)
    {
        $auteur = new Auteur();
        $frm = $this->createForm(AuteurType::class,$auteur);
        $frm->add('Valider',SubmitType::class);
        $frm->handleRequest($request);

        if ($frm->isSubmitted() && $frm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($auteur);
            $em->flush();
           return $this->redirectToRoute('new_autor');
        }
        return $this->render('auteur/new.html.twig',
            ['frm' => $frm->createView(),'title'=>'Autor',]);
    }
    /**
     * @Route("/show/{id}",name="show_autor")
     */
    public function show( int $id=-1)
    {
        if($id<=0)
            return $this->redirectoRoute('index');
        else
            {
                $repAuteur=$this->getDoctrine()->getRepository(Auteur::class);
                $oneautor=$repAuteur->findOneBy(['id'=>$id]);
                return $this->render('auteur/show.html.twig',
                    [
                        'val'=>$oneautor,
                        'title'=>'Autor',
                    ]);
            }

    }
    /**
     * @Route("/edit/{id}",name="edit_autor")
     */
    public function edit(int $id=-1,Request $request)
    {
        if ($id <= 0)

            return $this->redirectToRoute('index');

        else {
            $repAuteur = $this->getDoctrine()->getRepository(Auteur::class);
            $oneAuteur = $repAuteur->findOneBy(['id' => $id]);
            //creation du form
            $frm = $this->createForm(AuteurType::class, $oneAuteur);
            $frm->add('Modifier', SubmitType::class,['attr'=>['class'=>'btn btn-warning']]);

            $frm->handleRequest($request);

            if ($frm->isSubmitted() && $frm->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($oneAuteur);
                $em->flush();
                return $this->redirectToRoute('index');
            }

            return $this->render('auteur/edit.html.twig', [
                'frm' => $frm->createView(),
                'title'=>'Autor',
            ]);
        }
    }
    /**
     * @Route("/delete/{id}",name="delete_autor")
     */
    public function delete(int $id=-1)
    {

        {
            $repAuteur=$this->getDoctrine()->getRepository(Auteur::class);
            $autor=$repAuteur->findOneBy(['id'=>$id]);

            $em= $this->getDoctrine()->getManager();
            $em->remove($autor);
            $em->flush();
            return $this->redirectToRoute('index');
        }
    }
    
}
