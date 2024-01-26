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
        </center>
        <br>
        <h2>¡Bien Hecho!</h2>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick ="Alert.render('You look very pretty today.')" class="btn">¡Volver a ingresar!</button>
        <script src="app.js"></script>
   </div>
</body>
</html>