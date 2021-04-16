<?php

$generica = new stdClass;

$generica->nome = "Treinaweb";
$generica->curso = "php oo";

var_dump($generica);
echo "<br>";

$array = [
    "nome" => "Treinaweb",
    "curso"=> "php oo"
];

$objeto = (object) $array;

var_dump($objeto);