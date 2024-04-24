<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;

//------------------------------------TXT
$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__.'/arquivos');
$leitorTxt->setArquivo('dados.txt');
$arr_txt = $leitorTxt->lerArquivo();

//------------------------------------CSV
$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__.'/arquivos');
$leitorCsv->setArquivo('dados.csv');
$arr_csv = $leitorCsv->lerArquivo();

//--------------------Merge entre TXT e CSV
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';