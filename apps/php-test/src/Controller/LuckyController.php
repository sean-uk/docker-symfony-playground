<?php

namespace App\Controller;

use App\LuckyNumber;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @see https://symfony.com/doc/current/page_creation.html#creating-a-page-route-and-controller
     *
     * @param LuckyNumber\Generator $generator
     * @return Response
     * @throws \Exception
     */
    public function number(LuckyNumber\Generator $generator) : Response
    {
        // get a random lucky number
        $number = $generator->random();

        // return it in a HTML response
        $response = $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
        return $response;
    }
}