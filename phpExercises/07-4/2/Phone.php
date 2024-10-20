<?php

require_once 'IPhone.php';

class Phone implements IPhone
{
    public function callPhone()
    {
        echo "電話をかける <br>";
    }

    public function receivePhone()
    {
        echo "電話を受ける <br>";
    }
}