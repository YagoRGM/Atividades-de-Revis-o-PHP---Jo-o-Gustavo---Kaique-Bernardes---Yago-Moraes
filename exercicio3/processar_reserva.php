<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Reunião</title>
</head>

<body>
    <main>
        <form action="reserva.php" method="post">
            <h1>Reserva de Sala de Reunião</h1>

            <label for="name">Nome do Solicitante</label>
            <input name="name" type="text" id="name" required>

            <label for="name">Data</label>
            <input name="date" type="date" id="date" required>

            <label for="name">Horário</label>
            <input name="horario" type="time" id="time" required>


            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
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

    input {
        margin-bottom: 12px;
        padding: 10px;
        border-radius: 12px;
        border: 1px solid black;
        transition: all .2s ease-in-out;
    }

    input:hover{
        border: 1px solid #0F880F;
        transition: all .2s ease-in-out;
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

</html>