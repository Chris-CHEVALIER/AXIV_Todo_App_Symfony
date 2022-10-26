<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route("/lucky/number", name: "home")]
    public function number(): Response
    {
        $vegetables = ["oignon", "poivron", "tomate"];
        return $this->render("lucky.html.twig", [
            "random" => random_int(0, 100),
            "vegetables" => $vegetables
        ]);
        //return new Response("<h2>$number</h2>");
    }
}