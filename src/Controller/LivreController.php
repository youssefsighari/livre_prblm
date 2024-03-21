<?php

namespace App\Controller;

use App\Entity\Livres;
use App\Repository\LivresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivreController extends AbstractController
{


    #[Route('/livres', name: 'app_admin_find')]
    public function find(LivresRepository $Rep): Response
    {
       $i=$Rep->findAll();
      
        echo($i);
       //dd($i);

    

        return $this->render('livre/index.html.twig', [
            'livre'=>'$i',
        ]);

    }


    /*#[Route('livres/create', name: 'app_admin_create')]
    public function create(EntityManagerInterface $em): Response
    {
        $l=new Livres();
        $l->setAuteur("saif")
        ->setDateEdition(new \DateTime('01-01-2023'))
        ->setTitre("sahsah")
        ->setResume("zagzgzgzagzagazgergdsgdgsgdfgdgsdgd")
        ->setSlug("sahsah")
        ->setPrix(500)
        ->setImage("https://picsum.photos/300")
        ->setISBN("232.31616")
        ->setEditeur("yamema");
        $em->persist($l);
        $em->flush();
        dd($l);
        return $this->render('livres/show.html.twig', [
            'controller_name' => 'LivresController',
        ]);
    }

*/ 
}
