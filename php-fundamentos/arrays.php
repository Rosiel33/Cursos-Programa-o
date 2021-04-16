<?php

    $linguagens = ["php","java","javascript"];

    $linguagens2 = array("c#","html");

    echo $linguagens2[0];

    echo"<br>";

    $curso = ["curso php fundamentos", 6.6,32,true];

    $curso = [
        "nome_curso" => "curso php fundamentos",
        "versao_ferramenta"=> 7.7,
        "carga_horaria"=> 44,
        "status"=> true
    ];

    echo $curso ["nome_curso"];
    echo"<br>";
    echo $curso["versao_ferramenta"];

    echo"<br>";
    echo"<br>";echo"<br>";

    $numeros = [
        [1,2,3,4],
        [5,6,7],
        [7,8,9]
    ];

    echo"<br>";
    echo $numeros[0][2];
    echo"<br>";

    echo"---Arrays Multidimensionais----";echo"<br>";

    $cursos = [
        "java"=>[
            "nome_curso"=>"Curso de Java",
            "formato"=>" Formato em video",
            "duracao"=>46,
            "status"=> true
        ],
        "php"=>[
            "nome_curso"=>"Curso de Php",
            "duracao"=>43,
            "status"=> false
        ]
    ];

    $cursos["php"]["pre-requisito"] = "logica de programação";

    echo $cursos["java"]["nome_curso"];
    echo "<br>";
    echo $cursos["java"]["formato"];
    echo "<br>";
    echo $cursos["php"]["pre-requisito"];
    echo"<br>";
    echo"<br>";
    echo"<br>";
    $var1 = 3;
    $var2 =2;
   var_dump ($var1 < $var2);

   echo"<br>";
   echo"<br>";


   $n = 2;

   if ($n %2 !=0){
       echo "Estranho".PHP_EOL;
   } else if($n %2 == 0 && $n < 10){
       echo "Não é estranho".PHP_EOL;
   } else if($n %2 == 0 && $n > 10 && $n <20){
       echo "Estranho".PHP_EOL;
   } ;
    if ($n %2 == 0 && $n > 20 ){
       echo "Não é estranho".PHP_EOL;
   } else{
       echo "Estranho";
   }
   
 
