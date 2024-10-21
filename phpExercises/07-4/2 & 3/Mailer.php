<?php

require_once 'IMailer.php';

class Mailer implements IMailer
{
    public function sendMail()
    {
        echo "メールを送信する <br>";
    }

    public function receiveMail()
    {
        echo "メールを受信する <br>";
    }
}