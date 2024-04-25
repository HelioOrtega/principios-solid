<?php

namespace src\extrator;

class Txt extends Arquivo {

    public function lerArquivo(string $caminho): array {

        $handle = fopen($caminho, 'r');

        while(!feof($handle)) {
            $linha = fgets($handle);
            $cpf = substr($linha, 0, 11);
            $nome = substr($linha, 11, 30);
            $email = substr($linha, 41, 50);
            $this->setDados($nome, $cpf, $email);
        }

        fclose($handle);

        return $this->getDados();
    }
}