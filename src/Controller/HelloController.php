<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/")
     */
    public function Hello()
    {
        return new Response('Hello EveryOne !');
    }
}
