<?php

    $n = 2;

    for($i=1; $i <=10;$i++){
        echo "$n". " x " . "$i" . " = ". $i * $n."<br>";
    };

    //EXERCICIOS ARRAYS

    $linguagens = ['Java','PHP','C#','Python','JavaScript'];
    echo $linguagens[0];
    echo PHP_EOL;
    echo $linguagens[1];
    echo PHP_EOL;
    echo $linguagens[2];
    echo PHP_EOL;
    echo $linguagens[3];
    echo PHP_EOL;
    echo $linguagens[4];

    foreach ($linguagens as $linguagem) {
        echo "{$linguagem} <br>";
    }

