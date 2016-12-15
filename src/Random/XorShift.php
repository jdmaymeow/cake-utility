<?php

namespace CakeUtility\Random;

class XorShift
{
    protected $x;
    protected $y;
    protected $z;
    protected $w;

    /**
     * XorShift constructor.
     * @param null $seed Random generator seed
     */
    public function __construct($seed = null)
    {
        $this->x = 715225739;
        $this->y = 838041647;
        $this->z = 179424691;
        $this->w = $seed !== null ? $seed : mt_rand();
    }

    /**
     * Function getTrand
     * Return random number between max and min
     * @param int $min Minimum value
     * @param int $max Maximum value
     * @return int
     */
    public function getRand($min = 0, $max = 0x7fffffff)
    {
        $t = ($this->x ^ ($this->x << 11)) & 0x7fffffff;
        $this->x = $this->y;
        $this->y = $this->z;
        $this->z = $this->w;
        $this->w = ( $this->w ^ ($this->w >> 19) ^ ( $t ^ ( $t >> 8 )) );
        return $this->w % ($max - $min + 1) + $min;
    }
}
