<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login - Gestão Fácil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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

        $res = $db->query("
        SELECT * 
        FROM usuarios 
        WHERE usuario = '{$_POST['usuario']}'
    ");

        $linha = $res->fetch();

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

    <div class="login-container">

        <h1>Gestão Fácil</h1>

        <?php if ($erro) { ?>

            <div class="erro">
                Usuário ou senha inválidos
            </div>

        <?php } ?>

        <form action="" method="post">

            <div class="form-group">
                <label for="usuario">Usuário</label>

                <input type="text" id="usuario" name="usuario" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>

                <input type="password" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn">
                Entrar
            </button>

        </form>

    </div>

</body>

</html>