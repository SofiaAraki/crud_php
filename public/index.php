<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <div>
        <form action="create.php" method="POST">
            <input type="text" name="name" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Criar</button>
        </form>
    </div>
</body>
</html>
