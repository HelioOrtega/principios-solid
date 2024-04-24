<?php

namespace src;

class Arquivo {

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email) : void {
        array_push( $this->dados,
            ['nome' => iconv('iso-8859-1', 'utf-8', $nome),
             'cpf' => $cpf, 
             'email' => $email
            ]
        );
    }

    public function getDados(): array {
        return $this->dados;
    }

    public function lerArquivoCSV(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false) {
             $this->setDados($linha[0], $linha[1], $linha[2]);
        }
    }

    public function lerArquivoTXT(string $caminho): void {

        $handle = fopen($caminho, 'r');

        while(!feof($handle)) {
            $linha = fgets($handle);
            $cpf = substr($linha, 0, 11);
            $nome = substr($linha, 11, 30);
            $email = substr($linha, 41, 50);
            $this->setDados($nome, $cpf, $email);
        }
    }
}