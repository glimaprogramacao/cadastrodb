<?php
//chamando o bando de dados
include 'db.php';
// criando uma consulta ao banco de dados com uma query
$registros = $pdo->query("SELECT * FROM registros")->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Consultar Registros</title>
</head>
<body>
    <h1>Consultar Registros</h1>
    <!-- Criando a tabela para exibir os registros do banco de dados -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Data do cadastro</th>
            <th>Ações</th>
        </tr>
        <!-- pegando os registro para exibir na tabela linha por linha -->
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
            <td>
                <a href="excluir.php?id=<?= $registro['id'] ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>