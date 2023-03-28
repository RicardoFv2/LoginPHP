<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>LoginPHP</title>

</head>

<body>
    <?php
    if (isset($_SESSION['nombre'])) {
        echo "<p>Has iniciado sesion como: </p>" . $_SESSION['nombre'] . "";
        echo "<br><p><a href='CerrarSesion.php'> Cerrar Sesion</a></p>";
        echo "<br> <p><a href='PanelControl.php'>Ir al panel de control</a> </p>";
    } else {
        ?>
        <h2><strong>SISTEMA DE LOGIN Y REGISTRO</strong></h2>
        <form action="PanelControl.php" method="POST">
            <p>Nombre:</p>
            <p><input class="nom" type="text" placeholder="Ingrese su nombre" name="nombre" required /></p>
            <p><input type="submit" value="Ingresar" /></p>
        </form>
        <?php
    }
    ?>


</body>

</html>