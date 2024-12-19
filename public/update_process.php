<?php
include '../includes/db.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepara a query para evitar SQL Injection
    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);  // "ssi" -> string, string, integer (tipos dos dados)

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
