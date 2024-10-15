<?php

class CoinCase 
{
    private $coin = 500;
    private $count = 4;

    public function __construct($coin, $count)
    {
        $this->coin = $coin;
        $this->count = $count;
    }

    public function amount()
    {
        return $this->coin . "Yen " . $this->count . " pcs";
    }

    public function count()
    {
        $this->count += 1;
    }


}


$coin01 = new Coin500 (500, 4);
$coin01->amount();