<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Panel de control</title>
</head>

<body>
    <h2>La seccion creada correctamente</h2>
    <p>
        <?php
        if (isset($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            echo "Bienvenido! Has Iniciado sesion como: <b>" . $_POST['nombre'] . "</b>";
        } else {
            if (isset($_SESSION['nombre'])) {
                echo "Has iniciado Sesion como: " . $_SESSION['nombre'];
            } else {
                //Si la sesión expiro o no, mostraremos el siguiente mensaje
                echo "Acceso Restringido";
            }
        }
        ?>
    </p>
    <br>
    <p><a href="Login.php">Ir a la pagina inicial</a></p>
    <p><a href="CerrarSesion.php">Cerrar Sesion</a></p>

</body>
</html>