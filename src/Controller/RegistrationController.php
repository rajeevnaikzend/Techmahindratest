<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class RegistrationController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homepage(): Response
    {
        if ($this->getUser()) {
             return $this->redirectToRoute('app_guestbook.index');
         }
         else
         {
             return $this->redirectToRoute('app_login');
         }    
        //return $this->render('registration/home.html.twig');
    }        
    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $form = $this->createFormBuilder()
                ->add('username')
                ->add('password', RepeatedType::class,[
                    'type' => PasswordType::class,
                    'required' => true,
                    'first_options'  => ['label' => 'Password'],
                    'second_options' => ['label' => 'Confirm Password']
                ])
                ->add('register', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-success float-right'
                    ]
                ])
                ->getForm()
                ;
        
        $form->handleRequest($request);
        
        if($form->isSubmitted())
        {
            $data = $form->getData();
            
            $user = new User();
            $user->setUsername($data['username']);
            $user->setPassword(
                    $passwordEncoder->hashPassword($user,$data['password']));
            
            //dump($user);
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirect($this->generateUrl('app_login'));
        }
        
        return $this->render('registration/index.html.twig', [
           'form' => $form->createView()
        ]);
    }
}
