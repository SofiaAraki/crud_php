<?php
// Definindo variáveis de ambiente (você deve definir essas variáveis no seu ambiente)
$host = getenv('DB_HOST') ?: 'localhost';  // Default para 'localhost' caso a variável de ambiente não esteja definida
$user = getenv('DB_USER') ?: 'root';       // Default para 'root'
$pass = getenv('DB_PASS') ?: '';           // Default para vazio
$db = getenv('DB_NAME') ?: 'crud_db';      // Default para 'crud_db'

// Conectando ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    // Log de erro em um arquivo para análise posterior
    error_log("Erro de conexão: " . $conn->connect_error, 3, 'errors.log');
    
    // Exibir uma mensagem genérica e amigável ao usuário
    die("Desculpe, tivemos um erro ao tentar conectar ao banco de dados. Tente novamente mais tarde.");
}
?>
