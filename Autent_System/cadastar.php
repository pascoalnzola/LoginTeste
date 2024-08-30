<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<style>
    #cad{
        max-width: max-content;
        margin: auto;
        background-color: rgba(37, 45, 92, 0.664);
        color: white;
        padding: 30px;
        margin-top: 10%;
        border-radius: 5px;
    }
    h1{
        text-align: center;
    }
</style>
<body>
    <div id="cad">
        <h1>Cadastre-se</a></h1>
        <form action="cad.php" method="post">
            <label for="nome">Nome:</label>
            <input type="nome" name="nome" id="nome" required> <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required> <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha"> <br>
            <input type="submit" value="Cadasrar" id="btn">
        </form>
    </div>
</body>
</html>