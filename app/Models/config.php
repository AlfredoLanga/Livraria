<?php
// Configurações da base de dados
$hostname = 'localhost';
$port = 'sua_porta';
$username = 'seu_usuario';
$password = 'sua_senha';
$database = 'seu_banco_de_dados';

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    die();
}
?>
