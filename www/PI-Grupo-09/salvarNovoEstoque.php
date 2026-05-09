<?php require_once 'session.php'; ?>

<?php

$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$produto = $_POST['produto'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';
$alerta = $_POST['alerta'] ?? '';

$sql = "
    INSERT INTO estoque (
        produto,
        quantidade,
        alerta
    ) VALUES (
        :produto,
        :quantidade,
        :alerta
    )
";

$stmt = $db->prepare($sql);

$stmt->bindValue(':produto', $produto);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':alerta', $alerta);

$stmt->execute();

header('Location: estoque.php');
exit;
?>
