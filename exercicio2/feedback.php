<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Avaliação do Produto</title>
</head>
<body>
    <main>
        <form action="processar.php" method="POST">
            <h2>Avaliação do Produto</h2>
            <label for="product_name">Nome do Produto</label>
            <input type="text" id="product_name" name="product_name" required>
    
            <label for="rating">Nota do Produto</label>
            <div class="rating">
    <input type="radio" name="star" id="star1" value="5" required>
    <label for="star1"></label>

    <input type="radio" name="star" id="star2" value="4" required>
    <label for="star2"></label>

    <input type="radio" name="star" id="star3" value="3" required>
    <label for="star3"></label>

    <input type="radio" name="star" id="star4" value="2" required>
    <label for="star4"></label>

    <input type="radio" name="star" id="star5" value="1" required>
    <label for="star5"></label>
</div>
    
            <label for="comment">Comentário</label>
            <textarea id="comment" name="comment" rows="5" required></textarea>
    
            <input type="submit" value="Enviar Feedback">
        </form>
    </main>
</body>
</html>