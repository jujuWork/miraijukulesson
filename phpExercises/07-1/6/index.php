<?php

require_once ('CoinCase.php');

class Coin500
{
    public $coin01 = 500;

    public function amount()
    {
        $this->coin01 += 1;
        // $this->count += 1;
    }
}
