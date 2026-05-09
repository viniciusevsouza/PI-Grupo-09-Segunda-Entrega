<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Pedido - Gestão Fácil</title>
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


    <h1>Editar Pedido</h1>

    <?php
    $db = new PDO('mysql:host=localhost;dbname=pi_2_entrega;charset=utf8', 'root', 'root');
    $resultadoClientes = $db->query('SELECT id, nome FROM clientes ORDER BY nome');
    $clientes = $resultadoClientes->fetchAll();

    $id = $_POST['id'] ?? '';
    $cliente_id = $_POST['cliente_id'] ?? '';
    $tipo_produto = $_POST['tipo_produto'] ?? '';
    $quantidade = $_POST['quantidade'] ?? '';
    $detalhes_pedido = $_POST['detalhes_pedido'] ?? '';
    $data_entrega = $_POST['data_entrega'] ?? '';
    $status = $_POST['status'] ?? '';
    ?>

    <div class="form-container">

        <form action="salvarPedido.php" method="post">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label>Cliente</label>
                <select name="cliente_id" required>
                    <option value="">Selecione um cliente</option>
                    <?php foreach ($clientes as $c) { ?>
                        <option value="<?php echo $c['id']; ?>" <?php if ($c['id'] == $cliente_id)
                               echo 'selected'; ?>>
                            <?php echo $c['nome']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Produto</label>
                <input type="text" name="tipo_produto" value="<?php echo $tipo_produto; ?>" required>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" value="<?php echo $quantidade; ?>" required>
            </div>

            <div class="form-group">
                <label>Observação</label>
                <textarea name="detalhes_pedido"><?php echo $detalhes_pedido; ?></textarea>
            </div>

            <div class="form-group">
                <label>Data de Entrega</label>
                <input type="date" name="data_entrega" value="<?php echo $data_entrega; ?>" required>
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="status" required>

                    <option value="Recebido" <?php if ($status == 'Recebido')
                        echo 'selected'; ?>>
                        Recebido
                    </option>

                    <option value="Em Andamento" <?php if ($status == 'Em Andamento')
                        echo 'selected'; ?>>
                        Em Andamento
                    </option>

                    <option value="Finalizado" <?php if ($status == 'Finalizado')
                        echo 'selected'; ?>>
                        Finalizado
                    </option>

                </select>
            </div>

            <button type="submit" class="btn">
                Salvar Alterações
            </button>

        </form>

    </div>



        </div>

    </div>

    <script>
        const dropdowns = document.getElementsByClassName("dropdown-btn");

        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].addEventListener("click", function () {
                const dropdownContent = this.nextElementSibling;

                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>