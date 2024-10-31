<?php
include 'db.php';
$registros = $pdo->query("SELECT * FROM registros")->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Imprimir Registros</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Registros para Impressão</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Data do Cadastro</th>
        </tr>
        <?php foreach ($registros as $registro): ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= $registro['sobrenome'] ?></td>
            <td><?= $registro['endereco'] ?></td>
            <td><?= $registro['bairro'] ?></td>
            <td><?= $registro['cidade'] ?></td>
            <td><?= $registro['estado'] ?></td>
            <td><?= $registro['cep'] ?></td>
            <td><?= $registro['create_time'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button onclick="window.print()">Imprimir</button>
    <a href="index.php">Voltar</a>
</body>
</html>