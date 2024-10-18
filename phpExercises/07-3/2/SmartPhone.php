<?php

require_once 'Computer.php';

class SmartPhone extends Computer
{
    public function __construct()
    {
        parent::__construct("スマートフォン");
    }

    public function input()
    {
        echo "タッチパネルディスプレイをタップして操作 <br>";
    }

    public function output()
    {
        echo "タッチパネルディスプレイに出力 <br>";
    }
}