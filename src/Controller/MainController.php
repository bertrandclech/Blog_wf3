<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response 
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
