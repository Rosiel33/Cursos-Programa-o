<?php

    include_once "../sms/envio.php";
    include_once "../email/envio.php";

    use App\Email\Envio as Email;
    use App\SMS\Envio as SMS;
    use const App\Email\VERSAO;
    use function App\Email\validar;
    

    $email = new Email;
    $SMS = new SMS;

    echo VERSAO . "<br>";

   validar("rosiel@gmail");
    echo "<br>";

    var_dump($email,$SMS);