<?php
    session_start();
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $base = "LoginTeste";

    try{
        $conectar = new PDO("mysql:dbname=".$base."; host=".$hostname, $user, $password);
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
        echo 'Erro -> '.$ex->getMessage();
    }
?>