<?php

namespace src;

class Email implements IMensagemToken {
    
    public function enviar() : void {
        echo 'E-mail: seu token e 555-333';
    }
}