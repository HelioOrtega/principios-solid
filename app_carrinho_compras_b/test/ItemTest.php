<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {


    public function testEstadoInicialItem() {

        $item = new Item();

        $item->getDescricao() == '';
        $item->getValor() == 0;

        //Assertions
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetESetDescricao() {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals('Cadeira de plástico', $item->getDescricao());
    }

    public function testItemValido() {

        $item = new Item();

        //Submeter um item valido para o teste e retornar ok
        $item->setValor(55);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(true, $item->itemValido());

        //Submeter um item invalido para o teste e retornar false (descricao)
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
       
        //Submeter um item invalido para o teste e retornar false (valor)
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());

        //Item invalido
        $item->setValor(0);
        $item->setDescricao('');
        $this->assertEquals(false, $item->itemValido());
    }

    /*
    #[\dataProvider(dataProvider: "dataValores")]
    public function testGetESetValor($valor) {
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function dataValores() {
        return [
            [100],
            [-2],
            [0],
            [5]
        ];
    }
    */

}