<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="processar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Sua Avaliação</title>
</head>
<body>
<div class="info">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = htmlspecialchars($_POST['product_name']);
        $rating = htmlspecialchars($_POST['star']);
        $comment = htmlspecialchars($_POST['comment']);
    
        echo "<h2>Feedback Recebido!</h2>";
        echo "<div class='feedback-item' id='feedback1'><strong>Nome do Produto:</strong> <span>" . $product_name . "</span></div>";
        echo "<div class='feedback-item' id='feedback2'><strong>Nota:</strong> <span>" . $rating . "</span></div>";
        echo "<div class='feedback-item' id='feedback3'><strong>Comentário:</strong> <span>" . $comment . "</span></div>";
        echo "<a href='feedback.php' class='button'>Voltar</a>";
    } 
    ?>
</div>
</body>
</html>