<?php
    $dsn = "mysql:host=localhost;dbname=barbershop;charset=utf8";
    $usuario = "root";
    $senha = "1234";

    try{
        $PDO = new PDO($dsn, $usuario, $senha);

        echo "<h1>Conectado com sucesso!</h1><hr>";

    } catch(PDOException $erro){
        echo "<h1>Ocorreu um erro</h1><hr>";
    }

?>
