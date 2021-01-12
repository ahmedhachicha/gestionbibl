<?php


namespace App\Controller;
use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





class AdminController extends AbstractController
{
    /**
     * @Route("/oldadmin", name="admin")
     */
    public function index(UserRepository $user): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'title'=>'Acceuil',
            'users'=>$user->findAll(),
        ]);
    }
    /**
 * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
 */
 public function editUser(Request $request, User $user, EntityManagerInterface
 $em) {

 $form = $this->createForm(EditUserType::class,$user);

 $form->handleRequest($request);
 if($form->isSubmitted() && $form->isValid()) {
 $em->flush();

 //return $this->redirectToRoute('admin_utilisateurs');
 }

 return $this->render('admin/editUser.html.twig', ['formUser' => $form->createView(),
 'title'=>'Acceuil',]);
 }
}
