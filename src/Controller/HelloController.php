<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello")
     */
    public function Hello()
    {
        return new Response('This is the Black 4 App. Hello Everyone !');
    }
}
