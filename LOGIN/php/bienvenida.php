<?php
session_start();
if(!isset($_SESSION['correo'])){
    echo '
    <script>
    alert("Por favor debes inicar sesion")
    windows.location = "index.html";
    </script>
    ';
    header("location: index.html");
    session_destroy();
    die();

}
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brunh</title>
</head>
<body>
    <h1>Bienvenido a brunch royale</h1>
</body>
</html>