<?php

        // Loading the Classes
require_once 'IComputer.php';
require_once 'IMailer.php';
require_once 'IPhone.php';
require_once 'Cellphone.php';

$phone = new CellPhone();

    // Creating an Object
$phone = new Phone();
$mailer = new Mailer();
$computer = new ComputerPC();

    // Call function that uses this object
funcPhone($phone);
funcMailer($phone);
funcComputer($phone);

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