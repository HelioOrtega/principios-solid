<?php

require __DIR__."/vendor/autoload.php";

use src\Mensageiro;

//--Canal e-mail
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';

//Canal Token
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
