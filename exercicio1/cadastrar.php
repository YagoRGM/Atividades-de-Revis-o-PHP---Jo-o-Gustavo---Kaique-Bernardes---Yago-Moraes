<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastrar.css">
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <?php
        echo "<h2>Cliente cadastrado com sucesso!</h2><br>";
        echo "<ul><li><strong>Bem vindo!,</strong> " . $_POST["nome"] . "</li><br>";
        echo "<li><strong>Email:</strong> " . $_POST["email"] . "</li><br>";
        echo "<li><strong>Telefone: </strong>" . $_POST["tel"] . "</li></ul>";
        ?>   
    </div>
</body>
</html>