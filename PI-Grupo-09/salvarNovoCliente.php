<?php require_once 'session.php'; ?>

<?php

$db = new PDO(
    'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
    'root',
    'root'
);

$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$complemento = $_POST['complemento'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$pais = $_POST['pais'] ?? '';

$sql = "
    INSERT INTO clientes (
        nome,
        telefone,
        endereço,
        complemento,
        cidade,
        estado,
        pais
    ) VALUES (
        :nome,
        :telefone,
        :endereco,
        :complemento,
        :cidade,
        :estado,
        :pais
    )
";

$stmt = $db->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':telefone', $telefone);
$stmt->bindValue(':endereco', $endereco);
$stmt->bindValue(':complemento', $complemento);
$stmt->bindValue(':cidade', $cidade);
$stmt->bindValue(':estado', $estado);
$stmt->bindValue(':pais', $pais);

$stmt->execute();

$voltar = $_POST['voltar'] ?? 'clientes.php';

if ($voltar == 'cadastrarPedido.php') {
    header('Location: cadastrarPedido.php');
} else {
    header('Location: clientes.php');
}

exit;
?>