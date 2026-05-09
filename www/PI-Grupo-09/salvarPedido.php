<?php require_once 'session.php'; ?>

<?php

$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$id = $_POST['id'] ?? '';
$cliente_id = $_POST['cliente_id'] ?? '';
$tipo_produto = $_POST['tipo_produto'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';
$detalhes_pedido = $_POST['detalhes_pedido'] ?? '';
$data_entrega = $_POST['data_entrega'] ?? '';
$status = $_POST['status'] ?? '';

$sql = "
    UPDATE pedidos
    SET
        cliente_id = :cliente_id,
        tipo_produto = :tipo_produto,
        quantidade = :quantidade,
        detalhes_pedido = :detalhes_pedido,
        data_entrega = :data_entrega,
        status = :status
    WHERE id = :id
";

$stmt = $db->prepare($sql);

$stmt->bindValue(':id', $id);
$stmt->bindValue(':cliente_id', $cliente_id);
$stmt->bindValue(':tipo_produto', $tipo_produto);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':detalhes_pedido', $detalhes_pedido);
$stmt->bindValue(':data_entrega', $data_entrega);
$stmt->bindValue(':status', $status);

$stmt->execute();

header('Location: pedidos.php');
exit;
?>
