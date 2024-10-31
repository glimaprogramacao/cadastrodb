<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM registros WHERE id = ?");
    $stmt->execute([$id]);
    echo "Registro excluído com sucesso!";
}

header("Location: consultar.php");
exit;
?>