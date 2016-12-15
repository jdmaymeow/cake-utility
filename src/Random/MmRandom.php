<?php

namespace CakeUtility\Random;

class MmRandom
{

    private static $tree = 0;

    /**
     * @param int $seed Seed for random generator
     * @return void
     */
    public static function plantSeed($seed)
    {
        self::$tree = abs(intval($seed)) % 9999999 + 1;
        self::getRand();
    }

    /**
     * @param int $min Minimum value
     * @param int $max Maximum value
     * @return int
     */
    public static function getRand($min = 0, $max = 9999999)
    {
        self::$tree = (self::$tree * 125) % 2796203;
        return self::$tree % ($max - $min + 1) + $min;
    }
}
