<?php

declare(strict_types=1);

require_once "classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "88888/0001";
$fornecedor->razaoSocial = "união";
$fornecedor->nomeFantasia = "Mercado";

$fornecedor->autorizar(new class
{
    public $nome = "João";
    public $senha = "123";
});

var_dump($fornecedor);
