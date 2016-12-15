<?php

namespace CakeUtility\Random;

class Dice
{
    protected $data = [];
    protected $value;
    protected $random;

    /**
     * Dice constructor.
     */
    public function __construct()
    {
        $this->random = new XorShift();
    }

    /**
     * Returns how many times and which dice we will roll
     * @param null $config Config
     * @return mixed
     */
    protected function parseConfig($config = null)
    {
        $pattern = '/(\d*)x(\d*)/';
        preg_match($pattern, $config, $matches);
        return $matches;
    }

    /**
     * Roll Dice and return array with all rolls and sum fo your rolls.
     * @param null $config Config
     * @return array
     */
    public function roll($config = '1x6')
    {
        // parse config and set variables
        $config = $this->parseConfig($config);
        $diceType = $config[2];
        $count = $config[1];
        // initialize rolls and value variables
        $rolls = [];
        $value = 0;
        // roll dice
        for ($i = 1; $i <= $count; $i++) {
            $roll = $this->random->getRand(1, $diceType);
            $rolls[$i] = $roll;
            $value += $roll;
        }
        // set data and retun them
        $this->data['rolls'] = $rolls;
        $this->data['value'] = $value;
        return $this->data;
    }
}
