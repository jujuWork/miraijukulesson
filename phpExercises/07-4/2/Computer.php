<?php

class Computer implements IComputer
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