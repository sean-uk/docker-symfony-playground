<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @see https://symfony.com/doc/current/page_creation.html#creating-a-page-route-and-controller
     *
     * @return Response
     * @throws \Exception
     */
    public function number() : Response
    {
        // make up a random number
        $number = random_int(0, 100);

        // return it in a HTML response
        $body = "<html><body>Lucky number: {$number}</body></html>";
        return new Response($body);
    }
}