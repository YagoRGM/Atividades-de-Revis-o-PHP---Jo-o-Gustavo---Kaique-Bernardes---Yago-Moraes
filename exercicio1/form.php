<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="cadastrar.php" method="post">
        <h2>Cadastro de cliente</h2>
        <label for="nome">Nome de Usuário: </label>
        <input name="nome" type="text" placeholder="Insira seu nome: " required><br>
        <label for="mail">Email: </label>
        <input name="email" type="email" placeholder="Insira seu email: " required><br>
        <label for="tel">Telefone:</label>
        <input type="tel" name="tel" placeholder="Insira seu telefone: " required>
        <input type="submit" value="Entrar">
    </form>
<?php
    
?>
    
</body>
</html>