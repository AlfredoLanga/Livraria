<?php
// Configurações da base de dados
$hostname = 'localhost';
$port = '3306';
$username = 'root';
$password = '';
$database = 'livraria';

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    die();
}
?>
