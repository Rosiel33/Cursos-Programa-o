<?php

require_once "classes/Produto.php";
require_once "classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
//$prod1->descricao = "Cerveja";
$prod1->preco = 2.50;



$prod2 = new Produto;
$prod2->titulo = "Itaipava";
$prod2->descricao = "Cerveja";
$prod2->preco = 1.90;

var_dump($prod1);
echo "<br>";
echo "<br>";
var_dump($prod2);


$cli = new Cliente;

$cli->nome = "João";
$cli->idade = 55;
$cli->endereco = "SC";
$cli->telefone = "47-99999999";

echo "<br>";
echo "<br>";

$cli->comprar();

$nomeClasse = "Cliente";
echo "<br>";
$instancia = new $nomeClasse;
var_dump($instancia);

$cli2 = new $cli;
echo "<br>";
echo "<br>";


$nomeClasse2 = get_class($cli);
$cli3 = new $nomeClasse2;
$cli3->nome = "José";

var_dump($cli);
echo "<br>";
echo "<br>";
var_dump($cli2);
echo "<br>";
echo "<br>";
var_dump($cli3);
