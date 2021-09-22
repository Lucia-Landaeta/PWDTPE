<?php
$Titulo = "Resultado nueva persona";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");

$abmP = new AbmPersona();
$datos = data_submitted();
if (isset($datos['nroDni'])) {
    $exito = $abmP->alta($datos);
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow p-4">
                <?php
                if($exito){
                    echo" El alta de la persona se realizo con exito.";
                }else{
                    echo" No se pudo realizar el alta.";
                }
                ?>
                <a href="nuevaPersona.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>