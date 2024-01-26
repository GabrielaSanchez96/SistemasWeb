<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="dive2">
        <h1>Resultados</h1>
        <center>
                <img src="zero.png" alt="zero" width="300">
            <br>
            <h2>¡Bien Hecho!</h2>
            <?php
                $name = $_POST['Name'];
                echo '<b>Nombre:</b> '.$name.'<br>';
                $age = $_POST['Age'];
                echo '<b>Edad:</b> '.$age.'<br>';
                $city = $_POST['City'];
                echo '<b>Ciudad:</b> '.$city.'<br>';
                $hobby = $_POST['Hobby'];
                echo '<b>Pasatiempo:</b> '.$hobby.'<br>';
            ?>
                <div id="popUpOverlay"></div>
                <div id="popUpBox">
                    <div id="box">
                        <i class="fas fa-question-circle fa-5x"></i>
                        <h1>¿Volver a ingresar datos?</h1>
                        <div id="closeModal"></div>
                    </div>
                </div>
            <button onclick ="Alert.render()" class="btn">¡Volver a ingresar!</button>
            <script src="app.js"></script>
        </center>
   </div>
</body>
</html>