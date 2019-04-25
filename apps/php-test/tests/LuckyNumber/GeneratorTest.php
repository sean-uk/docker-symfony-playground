<?php


namespace Test\App\LuckyNumber;

use App\LuckyNumber\Generator;
use PHPUnit\Framework\Assert;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class GeneratorTest extends TestCase
{
    public function testRandom()
    {
        $generator = new Generator(0, 10);

        $number = $generator->random();
        Assert::assertGreaterThanOrEqual(0, $number);
        Assert::assertLessThanOrEqual(10, $number);
    }
}