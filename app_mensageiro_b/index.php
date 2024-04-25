<?php

require __DIR__."/vendor/autoload.php";

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\WhatsApp;

//--Canal e-mail
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';

//Canal Token
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '<br>';

//Canal WhatsApp
$msg2 = new Mensageiro(new WhatsApp());
$msg2->enviarToken();
