<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function sayHello()
    {
        return new Response('Hello EveryOne !');
    }
}
