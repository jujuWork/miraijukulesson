<?php

require_once 'Computer.php';

class PersonalComputer extends Computer
{
    public function __construct()
    {
        parent::__construct("パーソナルコンピュータ");
    }

    public function input()
    {
        echo "キーボード・マウスで入力 <br>";
    }

    public function output()
    {
        echo "ディスプレイに出力 <br>";
    }
}