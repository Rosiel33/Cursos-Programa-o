<?php
error_reporting(E_ALL);
$divisor = 4;



try {

    if($divisor === 0){
        throw new Exception("Não é possivel dividir por 0", 1);
        
    }

    $valor = 100 / $divisor;
    echo $valor;
} catch (\Throwable $th) {
    echo $th->getMessage();
}
