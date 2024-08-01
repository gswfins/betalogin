<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="usr" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="pwd" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>