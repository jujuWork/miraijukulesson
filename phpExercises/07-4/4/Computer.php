<?php

require_once 'IComputer.php';

class ComputerPC implements IComputer
{
    public function playGame()
    {
        echo "ゲームをする <br>";
    }

    public function browseWeb()
    {
        echo "ウェブを閲覧する <br>";
    }
}