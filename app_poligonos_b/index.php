<?php

require __DIR__."/vendor/autoload.php";

use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;

$poligonmo = new Poligono();
$poligonmo->setForma(new Retangulo());
$poligonmo->getForma()->setAltura(5);
$poligonmo->getForma()->setLargura(10);

echo '<pre>';
print_r($poligonmo);
echo '</pre>';
echo '<h3>Area do retangulo: '.$poligonmo->getArea().'</h3>';


$poligonmo = new Poligono();
$poligonmo->setForma(new Quadrado());
$poligonmo->getForma()->setLargura(10);

echo '<pre>';
print_r($poligonmo);
echo '</pre>';
echo '<h3>Area do quadrado: '.$poligonmo->getArea().'</h3>';


/*
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Area do retangulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Area do quadrado: '.$quadrado->getArea().'</h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Area do retangulo: '.$retangulo->getArea().'</h3>';
*/