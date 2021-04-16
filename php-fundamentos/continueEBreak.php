<?php

$cursos = [
    "java" => [
        "nome_curso" => "Curso de Java",
        "formato" => " Formato em video",
        "duracao" => 46,
        "status" => true
    ],
    "php" => [
        "nome_curso" => "Curso de Php",
        "duracao" => 43,
        "status" => false
    ],

    "c#" => [
        "nome_curso" => "Curso de c#",
        "duracao" => 7,
        "status" => true
    ],

];


foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
        continue;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Condição ativa?  " . $curso['status'];
    echo "<br>";
    echo "duração: " . $curso['duracao'];
    echo "<br>";
    echo "<br>";
}
