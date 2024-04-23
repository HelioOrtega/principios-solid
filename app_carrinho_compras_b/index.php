<?php

require __DIR__."/vendor/autoload.php";


use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();
//-----------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);
//-----------------------------
echo '<h4>Pedido iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-----------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//-----------------------------
echo '<h4>Pedido com items</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-----------------------------
echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//--------------------------
echo '<h4>Valor do Pedido</h4>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;
//-----------------------------
echo '<h4>Carrinho está valido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//--------------------------
echo '<h4>Status pedido</h4>';
echo $pedido->getStatus();
//--------------------------
echo '<h4>Confirmar pedido</h4>';
echo $pedido->confirmar();
//--------------------------
echo '<h4>Status pedido</h4>';
echo $pedido->getStatus();
//--------------------------
echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado') {
    echo EmailService::dispararEmail();
}
//--------------------------

/*
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();
*/

/*
$carrinho1->adicionarItem('Bicicleta', 750.10);
$carrinho1->adicionarItem('Galadeira', 1950.15);
$carrinho1->adicionarItem('Tapete', 350.20);
*/

/*
echo "<br />";
print_r($carrinho1->exibirItens());
echo 'Valor total recalculado: '.$carrinho1->exibirValorTotal();

echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();


$carrinho1->adicionarItem('Televisão 65"', 3570.25);

echo "<br />";
if($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}
echo "<br />";
echo 'status: '.$carrinho1->exibirStatus();*/