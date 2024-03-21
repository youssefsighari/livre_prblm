<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
   
    public function show() : response{
        {
            echo('hello everyone!');
            die;
            
        }
    }

    #[Route('/afficher/{prenom}/{age<\d+>?20}',name:'home_afficher')]
    public function afficher($prenom ,$age){
        {
            dd ("votre prenom est $prenom votre age est $age!");
            // route automatique
        }
    }
    #[route('/test2')]
    public function test(Request $request)
    {
        dd($request->get('_route'));
        dd($request);
    //return new Response("<h1>tout va bien</h1>");
    }

    #[route('/test2/{nom<[a-zA-Z]{2}>}', name:'home_test2',priority: 1)]
    public function test2($nom)
    {
    return $this->render("Home/test2.html.twig",['pre' => $nom]);
    }
}


