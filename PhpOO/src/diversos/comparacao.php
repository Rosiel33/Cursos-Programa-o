<?php

require_once "classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja";
$prod1->preco = 2.50;


$prod2 = new Produto;
$prod2->titulo = "Skol";
$prod2->descricao = "Cerveja";
$prod2->preco = 2.50;

var_dump($prod1 == $prod2);