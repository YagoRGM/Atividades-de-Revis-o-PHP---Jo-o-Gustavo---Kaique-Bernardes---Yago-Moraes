<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $horario = $_POST['horario'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Informações sobre a reserva</title>
</head>

<body>
    <main>
        <form action="$_GET">
            <h1>Informações sobre a reserva</h1>
            <div class="info">
                <label for="name">Nome do Solicitante: <label for="info-name" name="info-name"><?php echo $name ?></label> </label>
                <label for="name">Data: <label for="info-date" name="info-date"><?php echo $date ?></label> </label>
                <label for="name">Horário: <label for="info-time" name="info-time"><?php echo $horario ?></label> </label>
            </div>

        </form>
    </main>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }


        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: radial-gradient(circle, rgba(33, 224, 3, 1) 0%, rgba(1, 78, 0, 1) 100%);
        }

        form {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            max-width: 100%;
            height: 65%;
            padding: 50px;
            display: flex;
            flex-direction: column;
        }

        h1 {
            margin-bottom: 30px;
            color: #114811;
        }

        .info {
            margin-top: 65px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 25px;
        }

        button {
            margin-top: 25px;
            border-radius: 20px;
            padding: 10px;
            border: none;
            background-color: #0F880F;
            cursor: pointer;
            color: white;
            transition: all .2s ease-in-out;
        }

        button:hover {
            transform: scale(1.05);
            transition: all .2s ease-in-out;
        }
    </style>
</body>

</html>