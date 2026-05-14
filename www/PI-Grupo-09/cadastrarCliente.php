<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>



<head>
    <title>Cadastrar Cliente - Gestão Fácil</title>
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


            <h2>Cadastrar Cliente</h2>

            <div class="form-container">

                <form action="salvarNovoCliente.php" method="post">
                    <input type="hidden" name="voltar" value="<?php echo $_GET['voltar'] ?? 'clientes.php'; ?>">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" required>
                    </div>

                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" name="endereco" required>
                    </div>

                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" name="complemento">
                    </div>

                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" name="cidade" required>
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" name="estado" required>
                    </div>

                    <div class="form-group">
                        <label>País</label>
                        <input type="text" name="pais" maxlength="2" value="<?php echo $pais; ?>">
                    </div>

                    <button type="submit" class="btn">
                        Cadastrar Cliente
                    </button>

                </form>

            </div>



        </div>

    </div>

    <script src="ui.js" defer></script>
</body>

</html>