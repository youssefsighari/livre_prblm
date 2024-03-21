<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalculController extends AbstractController
{

#[Route('/acceuil1',name:'acceuil1')]
public function acceuil1()
{
return $this->render('calcul/acceuil.html.twig');
}





    #[Route('/addition/{a}/{b}', name: 'addition')]
    public function addition($a,$b): Response
    {

        $somme=$a + $b ;
        return $this->render('calcul/index.html.twig', [
            'somme' => $somme,
        ]);
    }
    #[Route('/soustraction/{a}/{b}', name: 'soustraction')]
    public function soustraction($a,$b): Response
    {

        $somme=$a - $b ;
        return $this->render('calcul/index.html.twig', [
            'somme' => $somme,
        ]);
    }
}
