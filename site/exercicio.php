<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa_login.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Validação de Login</title>
</head>
<body>
    <?php
    // Usuário e senha definidos para validação
    $usuario_corretos = "admin";
    $senha_corretos = "1234";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if ($username == $usuario_corretos && $password == $senha_corretos) {
            echo "<h2>Bem-vindo, " . $username . "!</h2>";
        } else {
            echo "<h2>Usuário ou senha incorretos.</h2>";
        }
    } else {
        echo "Por favor, use o formulário de login.";
    }
    ?>
</body>
</html>
