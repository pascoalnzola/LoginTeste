<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <div id="info">
            <h1>Faça o seu login na plataforma</h1> <br>
            <h2>Exercite e encontre o seu pontencial na plataforma Pascoal Nzola Tondo</h2>
            <br><button>More</button>
        </div>
        <div id="log">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <label for="nome">Nome:</label>
                <input type="nome" name="nome" id="nome" required> <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required> <br>
                <input type="submit" value="Logar" id="btn">
                <a href="cadastar.php">Cadasre-se</a>
            </form>
        </div>
    </main>
</body>
</html>