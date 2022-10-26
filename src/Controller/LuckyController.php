<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route("/", name: "home")]
    public function number(): Response
    {
        return $this->render("lucky.html.twig", [
            "random" => random_int(0, 100)
        ]);
        //return new Response("<h2>$number</h2>");
    }
}