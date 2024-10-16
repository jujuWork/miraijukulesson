<?php

require_once ('CoinCase.php');

class CoinCase
{
    private $coins_500 = 0;
    private $coins_100 = 0;
    private $coins_50 = 0;
    private $coins_10 = 0;
    private $coins_5 = 0;
    private $coins_1 = 0;

        // Adding coins
    public function addCoins($type, $number)
    {
        if ($type == 500) {
            $this->coins_500 += $number;
        } elseif ($type == 100){
            $this->coins_100 += $number;
        } elseif ($type == 50) {
            $this->coins_50 += $number;
        } elseif ($type == 10) {
            $this->coins_10 += $number;
        } elseif ($type == 5) {
            $this->coins_5 += $number;
        } elseif ($type == 1) {
            $this->coins_1 += $number;
        }
    }

        // Method to get the count of a coin type
    public function getCount($type)
    {
        if ($type == 500) {
            return $this->coins_500;
        } elseif ($type == 100) {
            return $this->coins_100;
        } elseif ($type == 50) {
            return $this->coins_50;
        } elseif ($type == 10) {
            return $this->coins_10;
        } elseif ($type == 5) {
            return $this->coins_5;
        } elseif ($type == 1) {
            return $this->coins_1;
        }
        return 0; // if the given coins is invalid
    }
        
    public function getAmount() {
        $total = 0;
        $total += $this->coins_500 * 500;
        $total += $this->coins_100 * 100;
        $total += $this->coins_50 * 50;
        $total += $this->coins_10 * 10;
        $total += $this->coins_5 * 5;
        $total += $this->coins_1 * 1;
        return $total;
    }

}