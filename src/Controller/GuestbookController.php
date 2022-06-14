<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Guest;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\GuestRepository;
use App\Form\GuestbookType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Route("/guestbook", name="app_guestbook.")
 */
class GuestbookController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(GuestRepository $guestRepository): Response
    {
        $guestBooks = $guestRepository->findAll();
        
        
        return $this->render('guestbook/index.html.twig', [
            'guestBooks' => $guestBooks
        ]);
    }
    
    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request, ManagerRegistry $doctrine)
    {
        $guest = new Guest();
        
        $form = $this->createForm(GuestbookType::class, $guest);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted())
        {
           /** @var UploadedFile $file */ 
         $file = $request->files->get('guestbook')['image'];
         
         if($file)
         {
             $filename = md5(uniqid()).'.'.$file->guessClientExtension();
             
             $file->move($this->getParameter('uploads_dir'),
                     $filename
                     );
            $guest->setImage($filename); 
         }
         $em = $doctrine->getManager();
         
        $em->persist($guest);
        $em->flush();
        
        return $this->redirect($this->generateUrl('app_guestbook.index'));
        } 
        
        
        
        return $this->render('guestbook/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/show/{id}", name="show")
     * @return Response
     */
    public function show(Guest $guestBook)
    {
        //$guestBook = $guestRepository->find($id);
        dump($guestBook);
        
        return $this->render('guestbook/show.html.twig', [
            'guestBook' => $guestBook
        ]);
    }
    
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function remove(Guest $guestBook, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $em->remove($guestBook);
        $em->flush();
        $this->addFlash('Success', 'Guestbook was removed');
        return $this->redirect($this->generateUrl('app_guestbook.index'));
    }        
}
