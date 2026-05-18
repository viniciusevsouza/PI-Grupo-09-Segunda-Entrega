<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Estoque - Gestão Fácil</title>
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


<h1>Editar Estoque</h1>

<div class="form-container">

    <form action="salvarEstoque.php" method="post">

        <input type="hidden" name="id" value="<?php echo $_POST['id'] ?? ''; ?>">

        <div class="form-group">
            <label>Produto</label>
            <input type="text" name="produto" value="<?php echo $_POST['produto'] ?? ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" value="<?php echo $_POST['quantidade'] ?? ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Alerta</label>
            <input type="number" name="alerta" value="<?php echo $_POST['alerta'] ?? ''; ?>" required>
        </div>

        <button type="submit" class="btn">Salvar Alterações</button>

    </form>

</div>



        </div>

    </div>

    <script src="ui.js" defer></script>
</body>

</html>
