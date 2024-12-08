<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $query = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    try {
        $query->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha]);
        header('Location: login.php');
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $erro = "Nome ou email já estão em uso.";
        } else {
            $erro = "Erro ao registrar.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="form-container">
        <form method="POST">
            <h2>Registro</h2>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Registrar</button>
            <?php if (isset($erro)) echo "<p class='error'>$erro</p>"; ?>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>