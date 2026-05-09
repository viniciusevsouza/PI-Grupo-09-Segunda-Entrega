<?php

require_once 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];

    $db = new PDO(
        'mysql:host=localhost;dbname=pi_2_entrega;charset=utf8',
        'root',
        'root'
    );

    $sql = "DELETE FROM pedidos WHERE id = :id";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();

}

header('Location: pedidos.php');
exit;