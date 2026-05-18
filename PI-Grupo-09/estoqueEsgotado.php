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


<h1>Estoque Esgotado</h1>

<?php 
$db = new PDO('mysql:host=localhost;dbname=pi_2_entrega;charset=utf8', 'root', 'root');

$resultado = $db->query('SELECT * FROM estoque WHERE quantidade =0');
$estoque = $resultado->fetchAll();

echo '<table>';

echo '
<tr>
    <th>Produto</th>
    <th>Quantidade</th>
    <th>Alerta</th>
    <th>
        <form action="cadastrarEstoque.php" method="post" class="form-inline">
            <button type="submit" class="btn btn-add">+ Novo</button>
        </form>
    </th>
</tr>';

foreach($estoque as $e) {

    echo '<tr>';

    echo '<td>' . $e['produto'] . '</td>';
    echo '<td>' . $e['quantidade'] . '</td>';
    echo '<td>' . $e['alerta'] . '</td>';

    echo '<td class="td-actions">
        <form action="editarEstoque.php" method="post" class="form-inline">
            <input type="hidden" name="id" value="' . $e['id'] . '">
            <input type="hidden" name="produto" value="' . $e['produto'] . '">
            <input type="hidden" name="quantidade" value="' . $e['quantidade'] . '">
            <input type="hidden" name="alerta" value="' . $e['alerta'] . '">
            <button type="submit" class="btn">Editar</button>
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
