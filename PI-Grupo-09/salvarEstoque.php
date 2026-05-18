<?php require_once 'session.php'; ?>

<?php

$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$id = $_POST['id'] ?? '';
$produto = $_POST['produto'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';
$alerta = $_POST['alerta'] ?? '';

$sql = "
    UPDATE estoque
    SET
        produto = :produto,
        quantidade = :quantidade,
        alerta = :alerta
    WHERE id = :id
";

$stmt = $db->prepare($sql);

$stmt->bindValue(':id', $id);
$stmt->bindValue(':produto', $produto);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':alerta', $alerta);

$stmt->execute();

header('Location: estoque.php');
exit;
?>
