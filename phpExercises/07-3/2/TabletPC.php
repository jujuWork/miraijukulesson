<?php

require_once 'Computer.php';

class TabletPC extends Computer
{
    public function __construct()
    {
        parent::__construct("タブレットPC"); // Set the type
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