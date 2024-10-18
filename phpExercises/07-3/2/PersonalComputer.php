<?php

require_once 'Computer.php';

class PersonalComputer extends Computer
{
    public function __construct()
    {
        parent::__construct("パーソナルコンピュータ"); // linking __contruct from Computer.php __contruct
    }

        // Linking to the absstract method in Computer.php
    public function input()
    {
        echo "キーボード・マウスで入力 <br>";
    }

        // Linking to the absstract method in Computer.php
    public function output()
    {
        echo "ディスプレイに出力 <br>";
    }
}