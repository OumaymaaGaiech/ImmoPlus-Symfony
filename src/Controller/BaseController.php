<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/base', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function index1(): Response
    {
        return $this->render('user/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
