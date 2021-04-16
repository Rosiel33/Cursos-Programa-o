<?php

require_once "variavelThis.php";



$cli = new Cliente;

$cli->nome = "João";
$cli->idade = 55;
$cli->endereco = "SC";
$cli->telefone = "47-99999999";

$cli->comprar();
echo "<br>";
$cli2 = new Cliente;

$cli2-> definirNome("Maria");
$cli2->idade = 55;
$cli2->endereco = "SC";
$cli2->telefone = "47-99999999";

$cli2->comprar();