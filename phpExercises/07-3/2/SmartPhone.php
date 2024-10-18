<?php

require_once 'Computer.php';

class SmartPhone extends Computer
{
    public function __construct()
    {
        parent::__construct("スマートフォン"); // linking __contruct from Computer.php __contruct
    }

        // Linking to the absstract method in Computer.php
    public function input()
    {
        echo "タッチパネルディスプレイをタップして操作 <br>";
    }

        // Linking to the absstract method in Computer.php
    public function output()
    {
        echo "タッチパネルディスプレイに出力 <br>";
    }
}