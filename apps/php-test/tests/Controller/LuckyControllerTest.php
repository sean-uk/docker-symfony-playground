<?php

namespace Test\App\Controller;

use App\Controller\LuckyController;
use PHPUnit\Framework\Assert;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerTest extends WebTestCase
{
    /**
     * @see https://symfony.com/doc/current/testing.html#your-first-functional-test
     */
    public function testNumber()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lucky/number');

        Assert::assertEquals(200, $client->getResponse()->getStatusCode());

        Assert::assertGreaterThan(0, $crawler->filter('h1:contains("Your lucky number is")')->count());
    }
}