<?php

        // Loading the Classes
require_once 'Computer.php';
require_once 'Mailer.php';
require_once 'Phone.php';

    // Creating an Object
$phone = new Phone();
$mailer = new Mailer();
$computer = new Computer();

    //call function that interact with the Phone object
funcPhone($phone);

    //call function that interact with the Mailer object
funcMailer($mailer);

    //call function that interact with the Phone object
funcComputer($computer);

    //defining a function in the Phone object
function funcPhone(Phone $phone)
{
    $phone->callPhone();
    $phone->receivePhone();
}

function funcMailer(Mailer $mailer)
{
    $mailer->sendMail();
    $mailer->receiveMail();
}

function funcComputer(Computer $computer)
{
    $computer->playGame();
    $computer->browseWeb();
}