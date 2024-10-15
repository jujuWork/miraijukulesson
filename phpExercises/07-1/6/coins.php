<?php

class CoinCase 
{
    private $coin;
    private $count;
    private $amount;

    public function __construct($coin, $count)
    {
        $this->coin = $coin;
        $this->count = $count;
    }

    public function getAmount()
    {
        return $this->coin . " 円玉は " . $this->count . " 枚";
    }
}

$coin1 = new CoinCase(500, 4);
echo $coin01->getAmount();