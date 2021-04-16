<?php

require_once "Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Brahma";
$prod1->descricao = "Cerveja";
$prod1->preco = 2.50;
$prod1->desconto = 0.1;

$prod1->defineCodigoBarras('99999');

$prod1->acessaCodigoBarras();

echo "<br>";

var_dump($prod1);