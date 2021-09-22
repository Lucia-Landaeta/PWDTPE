<?php
$Titulo = "Resultado ej 7";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe1.php");
include_once("../../utils/funciones.php")
?>
<div class="container">
    <?php
        $data = data_submitted();
        $obj = new controltp1();
        $rpta = $obj->ej7($data);
    ?>
    <h2>Respuesta:</h2>
    <h3><?php echo $rpta?></h3>
    <<br />
    <a href='EjercicioSiete.php'><button class="btn btn-outline-secondary btn-sm">Volver</button></a>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>