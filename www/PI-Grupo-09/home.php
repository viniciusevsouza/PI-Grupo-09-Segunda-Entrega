<?php
$db = new PDO('mysql:host=localhost;dbname=pi_2_entrega;charset=utf8', 'root', 'root');

$resultado = $db->query("SELECT * FROM pedidos WHERE status <> 'Finalizado'");
$pedidosAbertos = $resultado->fetchAll();

$resultado = $db->query("
    SELECT * 
    FROM pedidos 
    WHERE data_entrega <= DATE_ADD(CURDATE(), INTERVAL 3 DAY)
    AND status <> 'Finalizado'
");
$pedidosProximos = $resultado->fetchAll();

$resultado = $db->query("SELECT * FROM estoque WHERE quantidade = 0");
$estoqueEsgotado = $resultado->fetchAll();

$resultado = $db->query("SELECT * FROM estoque WHERE quantidade <= alerta AND quantidade > 0");
$estoqueBaixo = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestão Fácil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Gestão Fácil</h1>
    </header>

    <div class="page-layout">

        <div class="sidebar">

            <a href="home.php">Home</a>

            <button class="dropdown-btn">Clientes ▾</button>

            <div class="dropdown-container">
                <a href="clientes.php">Clientes</a>
                <a href="cadastrarCliente.php">Novo Cliente</a>
            </div>

            <button class="dropdown-btn">Pedidos ▾</button>

            <div class="dropdown-container">
                <a href="pedidos.php">Pedidos</a>
                <a href="cadastrarPedido.php">Novo Pedido</a>
            </div>

            <button class="dropdown-btn">Estoque ▾</button>

            <div class="dropdown-container">
                <a href="estoque.php">Estoque</a>
                <a href="cadastrarEstoque.php">Novo Estoque</a>
            </div>

        </div>

        <div class="main-content">
            <div class="dashboard">

                <a href="pedidosAbertos.php" class="card-link">
                    <div class="card">
                        <h2>Pedidos em Aberto</h2>
                        <p><?php echo count($pedidosAbertos); ?> pedido/s</p>
                    </div>
                </a>

                <a href="pedidosProximos.php" class="card-link">
                    <div class="card">
                        <h2>Pedidos Próximos da Data de Entrega</h2>
                        <p><?php echo count($pedidosProximos); ?> pedido/s</p>
                    </div>
                </a>

                <a href="estoqueEsgotado.php" class="card-link">
                    <div class="card">
                        <h2>Estoque Esgotado</h2>
                        <p><?php echo count($estoqueEsgotado); ?> item/ns</p>
                    </div>
                </a>

                <a href="estoqueBaixo.php" class="card-link">
                    <div class="card">
                        <h2>Estoque Baixo</h2>
                        <p><?php echo count($estoqueBaixo); ?> item/ns</p>
                    </div>
                </a>

                <a href="clientes.php" class="card-link">
                    <div class="card">
                        <h2>Clientes</h2>
                        <p>Gerenciar clientes</p>
                    </div>
                </a>

                <a href="logout.php" class="card-link">
                    <div class="card logout">
                        <h2>Logout</h2>
                        <p>Encerrar sessão</p>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <script src="ui.js" defer></script>
</body>

</html>