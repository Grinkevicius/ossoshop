<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        return $this->render('main/test.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/sale', name: 'sale')]
    public function sale(): Response
    {
        return $this->render('main/sale.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/contacts', name: 'contacts')]
    public function contacts(): Response
    {
        return $this->render('main/contacts.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/watches', name: 'watches')]
    public function watches(): Response
    {
        return $this->render('main/watches.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    #[Route('/shop', name: 'shop')]
    public function shop(): Response
    {
        return $this->render('main/shop.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
