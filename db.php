<?php
// db.php
$host = 'localhost';  // servidor local
$dbname = 'cadastrodb'; // nome do bando de dados
$username = 'root'; // Usuário de acesso ao bando de dados
$password = '';  // Senha de acesso ao bando de dados

$port = 3309; // Define a porta específica

try {
$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>