<?php
    include("config.php");
    if(isset($_POST["nome"]) && isset($_POST["senha"])){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $query = "SELECT * From logar";
        $res = $conectar->query($query)->fetchAll();
        
        foreach($res as $c) {
            if($c["nome"] == $nome && $c["senha"] == $senha){
                $_SESSION['user_id'] = $c['id'];
                $_SESSION['usuario'] = $nome;
                header("Location: principal.php");
            }
        }
    }

?>