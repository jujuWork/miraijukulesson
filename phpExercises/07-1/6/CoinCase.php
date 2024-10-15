<?php

class CoinCase 
{
    private $coin;
    private $count;

    public function __construct($coin, $count)
    {
        $this->coin = $coin;
        $this->count = $count;
    }

    public function count()
    {
        $this->count += 1;
    }
}