<?php
require_once "classes/Fornecedor.php";



$fornecedor = new Fornecedor;

$fornecedor->autorizar(new class 
{
    public $nome = "João";
    public $senha = "123";
});