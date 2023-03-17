<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashController extends AbstractController
{
    #[Route('/dash', name: 'app_dash')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('dash.html.twig', [
        'controller_name' => 'DashController',
         ]);


    }


}
