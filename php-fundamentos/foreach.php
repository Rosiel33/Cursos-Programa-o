<?php

// percorrer array com for


$n =[2,3,4,5,6,7,8];

for ($i=0; $i < count($n); $i=$i+1){
    echo $n[$i]."<br>";
}
 
echo "---percorrer array com foreach----- <br>";

//percorrer array com foreach

$n =[9,3,4,5,6,7,8];

foreach ($n as $key => $value) {
    echo "chave: $key valor: $value" ."<br>";
}
 // PEGANDO SOMENTE OS VALORES
foreach ($n as  $value) {
    echo"valor: {$value}"."<br>";
}

