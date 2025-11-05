<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; // Already present
use Symfony\Component\Routing\Attribute\Route; // Already present

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        // Change this line to return the specified Response
        return new Response("Welcome to the dashboard! (Protected Area)"); 
    }
}