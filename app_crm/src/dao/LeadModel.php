<?php

namespace src\dao;

use src\BD;
use src\interfaces\ICadastro;

use src\componentes\Log;
use src\componentes\Notificacao;

class LeadModel extends BD implements ICadastro {

    public function salvar() {

    }

    public function registrarLog(Log $log) {
        
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        
    }

}