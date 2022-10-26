<?php

namespace App\Controller;

use App\Entity\TodoList;
use App\Form\TodoListType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    #[Route("/", "read-all-lists")]
    public function readAll()
    {
        return $this->render("list/index.html.twig");
    }

    #[Route("/new/list", "create-list")]
    public function create()
    {
        $list = new TodoList();
        $form = $this->createForm(TodoListType::class, $list);

        return $this->renderForm("list/form.html.twig", compact("form"));
    }
}