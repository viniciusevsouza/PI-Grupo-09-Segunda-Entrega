<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Pedido - Gestão Fácil</title>
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


            <h2>Cadastrar Pedido</h2>

            <?php
            $db = new PDO('mysql:host=localhost;dbname=pi_2_entrega;charset=utf8', 'root', 'root');
            $resultadoClientes = $db->query('SELECT id, nome FROM clientes ORDER BY nome');
            $clientes = $resultadoClientes->fetchAll();
            ?>

            <div class="form-container">

                <form action="salvarNovoPedido.php" method="post">
                    <div class="form-group">

                        <label>Cliente</label>

                        <div class="cliente-row">

                            <div class="cliente-select">
                                <select name="cliente_id" required>
                                    <option value="">Selecione um cliente</option>

                                    <?php foreach ($clientes as $c) { ?>

                                        <option value="<?php echo $c['id']; ?>">
                                            <?php echo $c['nome']; ?>
                                        </option>

                                    <?php } ?>

                                </select>
                            </div>

                            <a href="cadastrarCliente.php?voltar=cadastrarPedido.php">
                                <button type="button" class="btn btn-cliente">
                                    + Novo Cliente
                                </button>
                            </a>

                        </div>

                    </div>

                    <div class="form-group">
                        <label>Produto</label>
                        <input type="text" name="tipo_produto" required>
                    </div>

                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" required>
                    </div>

                    <div class="form-group">
                        <label>Observação</label>
                        <textarea name="detalhes_pedido"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Data de Entrega</label>
                        <input type="date" name="data_entrega" required>
                    </div>

                    <button type="submit" class="btn">
                        Cadastrar Pedido
                    </button>

                </form>

            </div>



        </div>

    </div>

    <script src="ui.js" defer></script>
</body>

</html>