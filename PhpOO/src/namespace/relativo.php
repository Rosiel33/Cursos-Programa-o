<?php

    require_once "../PhpOO/autoload/autoload-psr4.php";

    require_once "../email/envio.php";
    require_once "../classes/Cliente.php";
    require_once "../email/adaptadores/mailgun/adaptador.php";


    $email = new App\Email\Envio;

    $email->enviar();
    echo "<br>";
    var_dump($email);
  