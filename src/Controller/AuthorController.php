<?php

namespace App\Controller;

use App\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/authors", name="authors_app")
     */
    public function index()
    {

        $authors = $this->getDoctrine()->getRepository(Author::class)->findAll();

        return $this->render('author/author.html.twig', [
            'controller_name' => 'AuthorController',
            'authors' => $authors
        ]);
    }
}
