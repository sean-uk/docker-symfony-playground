<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
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
        $response = $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
        return $response;
    }
}