<?php
include '../includes/db.php';

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepara a query para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);  // "ss" -> string, string (tipos dos dados)

    // Executa a query
    if ($stmt->execute()) {
        // Redireciona para a página 'read.php' sem imprimir nada antes
        header("Location: read.php");
        exit();  // Certifique-se de que o script pare após o redirecionamento
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();  // Fecha o statement
}

$conn->close();
?>
