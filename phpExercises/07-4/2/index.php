<?php

        // Loading the Classes
require_once 'Computer.php';
require_once 'Mailer.php';
require_once 'Phone.php';

    // Creating an Object
$phone = new Phone();
$mailer = new Mailer();
$computer = new Computer();

    // Call function that uses this object
funcPhone($phone);
funcMailer($mailer);
funcComputer($computer);

    // Function for phone
function funcPhone(IPhone $phone)
{
    $phone->callPhone();
    $phone->receivePhone();
}

    // Functino for Mailer
function funcMailer(IMailer $mailer)
{
    $mailer->sendMail();
    $mailer->receiveMail();
}

    // Functino for Computer
function funcComputer(IComputer $computer)
{
    $computer->playGame();
    $computer->browseWeb();
}