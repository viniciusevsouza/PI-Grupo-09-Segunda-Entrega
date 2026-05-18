<?php require_once 'session.php'; ?>

<?php

$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$complemento = $_POST['complemento'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$pais = $_POST['pais'] ?? '';

$sql = "
    UPDATE clientes
    SET
        nome = :nome,
        telefone = :telefone,
        endereço = :endereco,
        complemento = :complemento,
        cidade = :cidade,
        estado = :estado,
        pais = :pais
    WHERE id = :id
";

$stmt = $db->prepare($sql);

$stmt->bindValue(':id', $id);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':telefone', $telefone);
$stmt->bindValue(':endereco', $endereco);
$stmt->bindValue(':complemento', $complemento);
$stmt->bindValue(':cidade', $cidade);
$stmt->bindValue(':estado', $estado);
$stmt->bindValue(':pais', $pais);

$stmt->execute();

header('Location: clientes.php');
exit;
?>