<?php require_once 'session.php'; ?>

<?php

$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$complemento = $_POST['complemento'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$pais = $_POST['pais'] ?? '';
$id = $_POST['id'] ?? '';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Cliente - Gestão Fácil</title>
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


    <h1>Editar Cliente</h1>

    <div class="form-container">

        <form action="salvarCliente.php" method="post">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $nome; ?>">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" value="<?php echo $telefone; ?>">
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" value="<?php echo $endereco; ?>">
            </div>

            <div class="form-group">
                <label>Complemento</label>
                <input type="text" name="complemento" value="<?php echo $complemento; ?>">
            </div>

            <div class="form-group">
                <label>Cidade</label>
                <input type="text" name="cidade" value="<?php echo $cidade; ?>">
            </div>

            <div class="form-group">
                <label>Estado</label>
                <input type="text" name="estado" value="<?php echo $estado; ?>">
            </div>

            <div class="form-group">
                <label>País</label>
                <input type="text" name="pais" maxlength="2" value="<?php echo $pais; ?>"
                    style="text-transform: uppercase;">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

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