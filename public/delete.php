<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    // Garantir que o ID seja um número inteiro
    $id = (int)$_GET['id'];

    // Preparar a query para evitar SQL Injection
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);  // "i" significa que o parâmetro é um inteiro

    // Executar a query
    if ($stmt->execute()) {
        // Redirecionar para a página de leitura após a exclusão
        header("Location: read.php");
        exit();  // Certificar-se de que o script pare após o redirecionamento
    } else {
        echo "Erro ao deletar: " . $stmt->error;
    }

    // Fechar o statement
    $stmt->close();
}

$conn->close();
?>
