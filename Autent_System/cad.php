<?php
    include("config.php");
    if(isset($_POST["nome"]) && isset($_POST["senha"]) && isset($_POST["email"])){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];

        $query = "SELECT * From logar";
        $res = $conectar->query($query)->fetchAll();
        
        foreach($res as $c) {
            if(!($c["email"] == $email)){
                $query = "INSERT INTO logar Values(default, '$nome', '$senha', '$email')";
                $res = $conectar->query($query);
                $_SESSION['user_id'] = $c['id'];
                $_SESSION['usuario'] = $nome;
                header("Location: principal.php");
            }
            else{
                echo "O email já está cadastrado";
            }
        }
    }

?>