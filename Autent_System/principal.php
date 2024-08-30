<?php
    include ("config.php");
    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php'); // Redireciona se não estiver logado
        exit();
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<style>
    head{
       height: 50px; 
       background-color: blue;
       display: flex;
    }
    head nav ul{
        display: flex;
        justify-content: space-between;
    }
    li{
        list-style-type: none;
        display: inline;
    }
    table{
        border: 1px solid black;
    }
</style>
<body>
   <head>
   <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
        <h1>Ola, Seja Bem <?php echo $_SESSION["usuario"]?></h1>
    </nav>
   </head>
   <?php
        if($_SESSION['usuario'] == "Sílvio Santiago"){
            $query = "SELECT * From logar";
            $res = $conectar->query($query)->fetchAll();
            echo "<table border='1'>";
            echo "<tr><td>Nome</td>";
            echo "<tr><td>Email</td>";
            echo "<tr><td>Senha</td>";
            foreach($res as $c) {
                echo "<tr><td>".$c['nome']."</td>";
                echo "<td>".$c['email']."</td>";
                echo "<td>".$c['senha']."</td></tr>";
            }
            echo "</table>";
        }
    ?>  
</body>
</html>