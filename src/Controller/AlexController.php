<?php  

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AlexController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('alex');
    }
}
