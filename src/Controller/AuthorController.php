<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author", name="author")
     */
    public function author()
    {
        return $this->render('author/author.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
}
