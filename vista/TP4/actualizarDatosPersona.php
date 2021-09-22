<?php
$Titulo = "Actualizar datos";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");
$datos = data_submitted();
$resp = false;
$abmP = new AbmPersona();
if (isset($datos['accion'])) {
    if ($abmP->modificacion($datos)) {
        $resp = true;
    }

    if ($resp) {
        $mensaje = "La modificación se realizo correctamente.";
    } else {
        $mensaje = "La modificación no pudo concretarse.";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow p-4">
                <?php
                echo $mensaje;
                ?>
                <a href="buscarPersona.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>