<?php

require_once "classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja";
$prod1->preco = 2.50;

$prod2 = clone $prod1;

$prod2->preco = 3.44;

function alterarProduto($produto)
{
    $produto->titulo = "Coca Cola";
    return $produto;
}

$prod3 = alterarProduto(clone $prod2);

function novoProduto($produto)
{
    $produto->titulo = "Fanta";
    $produto->descricao = "Regrigerante";
    return $produto;
}

$prod4 = novoProduto(clone $prod1);

echo "<br>";
var_dump($prod1);
echo "<br>";
var_dump($prod2);
echo "<br>";
var_dump($prod3);
echo "<br>";
var_dump($prod4);
