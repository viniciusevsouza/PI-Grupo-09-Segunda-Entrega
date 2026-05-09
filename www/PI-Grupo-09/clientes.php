<?php require_once 'session.php'; ?>

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


<h1>Lista de Clientes</h1>

<?php 
$db = new PDO('mysql:host=localhost;dbname=pi_2_entrega;charset=utf8', 'root', 'root');

$resultado = $db->query('SELECT * FROM clientes');
$clientes = $resultado->fetchAll();

echo '<table>';

echo '
<tr>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Complemento</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>País</th>
    <th>

        <form action="cadastrarCliente.php" method="post" class="form-inline">
            <button type="submit" class="btn btn-add">+ Novo</button>
        </form>

    </th>
</tr>';

foreach($clientes as $c) {

    echo '<tr>';

    echo '<td>' . $c['nome'] . '</td>';
    echo '<td>' . $c['telefone'] . '</td>';
    echo '<td>' . $c['endereço'] . '</td>';
    echo '<td>' . $c['complemento'] . '</td>';
    echo '<td>' . $c['cidade'] . '</td>';
    echo '<td>' . $c['estado'] . '</td>';
    echo '<td>' . $c['pais'] . '</td>';

    echo '<td>
    
        <form action="editarCliente.php" method="post" class="form-inline">

            <input type="hidden" name="id" value="' . $c['id'] . '">
            <input type="hidden" name="nome" value="' . $c['nome'] . '">
            <input type="hidden" name="telefone" value="' . $c['telefone'] . '">
            <input type="hidden" name="endereco" value="' . $c['endereço'] . '">
            <input type="hidden" name="complemento" value="' . $c['complemento'] . '">
            <input type="hidden" name="cidade" value="' . $c['cidade'] . '">
            <input type="hidden" name="estado" value="' . $c['estado'] . '">
            <input type="hidden" name="pais" value="' . $c['pais'] . '">
            <button type="submit" class="btn">Editar</button>

        </form>

    </td>';

    echo '</tr>';
}

echo '</table>';
?>



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