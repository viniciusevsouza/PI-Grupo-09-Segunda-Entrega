<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pedidos Próximos - Gestão Fácil</title>
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

            <h1>Lista de Pedidos Próximos do Prazo</h1>

            <?php

            $db = new PDO(
                'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
                'root',
                'root'
            );

            $sql = "
    SELECT
        pedidos.id,
        pedidos.cliente_id,
        pedidos.tipo_produto,
        pedidos.quantidade,
        pedidos.detalhes_pedido,
        pedidos.data_pedido,
        pedidos.data_entrega,
        pedidos.status,
        clientes.nome AS nome_cliente 
    FROM pedidos
    INNER JOIN clientes
        ON pedidos.cliente_id = clientes.id 
    WHERE data_entrega <= DATE_ADD(CURDATE(), INTERVAL 3 DAY)
    AND status <> 'Finalizado'
    ORDER BY pedidos.data_entrega ASC";

            $resultado = $db->query($sql);
            $pedidos = $resultado->fetchAll();

            echo '<table>';

            echo '
            <tr>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Observação</th>
                <th>Data do Pedido</th>
                <th>Data de Entrega</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>';

            $hoje = new DateTime();

            foreach ($pedidos as $p) {

                echo '<tr>';

                echo '<td>' . $p['nome_cliente'] . '</td>';
                echo '<td>' . $p['tipo_produto'] . '</td>';
                echo '<td>' . $p['quantidade'] . '</td>';
                echo '<td>' . $p['detalhes_pedido'] . '</td>';
                echo '<td>' . $p['data_pedido'] . '</td>';
                echo '<td>' . $p['data_entrega'] . '</td>';
                echo '<td>' . $p['status'] . '</td>';

                echo '
                    <td class="td-actions">
                        <form action="editarPedido.php" method="post" class="form-inline">

                            <input type="hidden" name="id" value="' . $p['id'] . '">

                            <input type="hidden" name="cliente_id" value="' . $p['cliente_id'] . '">

                            <input type="hidden" name="tipo_produto" value="' . $p['tipo_produto'] . '">

                            <input type="hidden" name="quantidade" value="' . $p['quantidade'] . '">

                            <input type="hidden" name="detalhes_pedido" value="' . $p['detalhes_pedido'] . '">

                            <input type="hidden" name="data_entrega" value="' . $p['data_entrega'] . '">

                            <input type="hidden" name="status" value="' . $p['status'] . '">

                            <button type="submit" class="btn">
                                Editar
                            </button>

                        </form>
                    </td>';

                echo '</tr>';
            }

            echo '</table>';

            ?>

        </div>

    </div>

    <script src="ui.js" defer></script>

</body>

</html>