<?php require_once 'session.php'; ?>

<?php
$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$erro = false;

if (
    array_key_exists('usuario', $_POST) &&
    array_key_exists('senha', $_POST)
) {

    $stmt = $db->prepare(
        "SELECT * FROM usuarios WHERE usuario = :usuario"
    );

    $stmt->execute([
        ':usuario' => $_POST['usuario']
    ]);

    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($linha && $linha['senha'] === $_POST['senha']) {

        $_SESSION['usuario_id'] = $linha['id'];

        header("Location: home.php");
        exit();

    } else {

        $erro = true;
    }
}

if (
    array_key_exists('usuario_id', $_SESSION) &&
    $_SESSION['usuario_id']
) {

    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Gestão Fácil</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

    <div class="login-container">

        <div class="login-card">

            <h1>Gestão Fácil</h1>
            <p class="login-subtitle">
                Sistema de gerenciamento de clientes
            </p>

            <?php if ($erro) { ?>

                <div class="erro">
                    Usuário ou senha inválidos.
                </div>

            <?php } ?>

            <form action="" method="post">

                <div class="form-group">
                    <label for="usuario">Usuário</label>

                    <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>

                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn">
                    Entrar
                </button>

            </form>

        </div>

    </div>

</body>

</html>

</html>