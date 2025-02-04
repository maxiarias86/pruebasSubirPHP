</div>
<div class="footer">
    <p class="footer-text">VisualGO<br>Sistema de Informes Ecográficos en Ginecología y Obstetricia</p>
    <a class="button-anchor" href="../Vista/index.php">Inicio</a>
    <?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $dt = new DateTime("now");
    $dia = $dt->format('N');
    switch ($dia) {
        case 1: $dia = "Lunes"; break;
        case 2: $dia = "Martes"; break;
        case 3: $dia = "Miércoles"; break;
        case 4: $dia = "Jueves"; break;
        case 5: $dia = "Viernes"; break;
        case 6: $dia = "Sábado"; break;
        case 7: $dia = "Domingo"; break;
    }
    echo "
<p class='footer-text'>".$dia." ".$dt->format('d/m/Y') ."<br>". $dt->format('H:i')." horas</p>";
    ?>
</div>