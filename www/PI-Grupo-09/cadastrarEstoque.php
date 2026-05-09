<?php require_once 'session.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Estoque - Gestão Fácil</title>
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


            <h2>Cadastrar Estoque</h2>

            <div class="form-container">

                <form action="salvarNovoEstoque.php" method="post">

                    <div class="form-group">
                        <label>Produto</label>
                        <input type="text" name="produto" required>
                    </div>

                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" required>
                    </div>

                    <div class="form-group">
                        <label>Alerta</label>
                        <input type="number" name="alerta" required>
                    </div>

                    <button type="submit" class="btn">Cadastrar Estoque</button>

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