<?php

    require_once "../email/adaptadores/mailgun/adaptador.php";
    require_once "../email/adaptadores/ses/adaptador.php";

    $mailgun = new \App\Email\adaptadores\mailgun\Adaptador;
    $ses = new \App\Email\adaptadores\ses\Adaptador;

    var_dump($mailgun, $ses);
    