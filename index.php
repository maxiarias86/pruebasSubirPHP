<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Estilos/styles.css" rel="stylesheet">
    <title>Inicio</title>

</head>
<body>
<?php include ("header.php") ?>
<main>
    <div class="image-container">
        <img src="principal.jpg" alt="Imagen Principal">
        <?php
        if (isset($_GET["mensaje"])) {
            $mensaje = $_GET["mensaje"];
            echo "<div class='overlay-text'>$mensaje</div>";
        } else {
            echo '<div class="overlay-text"></div>';
        }
        if (isset($_SESSION["nombre"])) {
            $nombre = $_SESSION["nombre"];
        }
        ?>
    </div>
</main>
<?php include ("footer.php") ?>
</body>
</html>