<?php

namespace src;

use src\IMensagemToken;

class Mensageiro {

    private $canal;

    //Agora a classe não depende do Sms ou Email
    //Agora dependerá de abstração e não de implementação
    public function __construct(IMensagemToken $canal) {
        $this->setCanal($canal);
    }

    public function getCanal(): IMensagemToken {
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void {
        $this->canal = $canal;
    }

    public function enviarToken(): void {

        $this->getCanal()->enviar();
        //Aqui ha uma depencia direta da implementacao
        /*
        $classe = '\src\\'.ucfirst($this->getCanal());
        echo $classe;
        echo '<br>';
        $obj = new $classe;
        $obj->enviar();
        */
    }
}