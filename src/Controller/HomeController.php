<?php

namespace App\Controller; // always has to match app directory!

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController // class name must match file name!
{
    #[Route('/')]
    public function homepage(): Response
    {
        $medCount = 123;
        //return new Response('<strong>Starlite Pharmacy:</strong>: Your Solution for prescription delivery!');
        return $this->render('main/homepage.html.twig',  [
            'numberofMeds' => $medCount,
        ]);
    }
}
 