<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/blog', name: 'blog')]

class BlogController extends AbstractController
{

    #[Route('/acceuil', name: '_acceuil')]
    public function index()
    {
       //$url = $this->generateUrl('blog_user',['name' => 'asma']);
       //dd($url);
       //return $this->redirect($url);
       //return $this->redirectToRoute('blog_article',['id'=> 2,'name' => 'asma']);

       return $this->render('blog/index.html.twig');
    }

    
    #[Route('/user/{name}', name: '_user')]
    public function show_user($name)
    {
       dd("USER:$name");
    }


    #[Route('/article/{id}/{name}', name: '_article')]
    public function article_detail($id,$name): Response
    {
        return $this->render('blog/article_detail.html.twig', [
           'a' => $id,'b' => $name
        ]);
    }



    

    #[Route('/retour_acceuil',name:'retour')]
    public function retour(){
      return $this->render('blog/retour_acceuil.html.twig');
    }








    

   
}
