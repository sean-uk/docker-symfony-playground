<?php


namespace App\LuckyNumber;

/**
 * Class Generator
 *
 * Generate a lucky number
 *
 * @package App\LuckyNumber
 */
class Generator
{
    /** @var int $min */
    private $min;

    /** @var $int $max */
    private $max;

    /**
     * Generator constructor.
     *
     * @param int $min
     * @param int $max
     */
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Get a random lucky number
     *
     * @return int
     * @throws \Exception
     */
    public function random() : int
    {
        return random_int($this->min, $this->max);
    }
}