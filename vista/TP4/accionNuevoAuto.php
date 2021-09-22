<?php
$Titulo = "Resultado Buscar auto";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");
$abmP=new AbmPersona();
$abmA = new AbmAuto();
$datos = data_submitted();
$exito=false;
if (isset($datos['dniDuenio'])) {
    $arrP=$abmP->buscar(["nroDni"=>$datos["dniDuenio"]]);
    if(count($arrP)>0){
        $exito = $abmA->alta($datos);
    }
    
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow p-4">
                <?php
                if($exito){
                    echo" El alta del auto se realizo con exito.";
                }else{
                    echo" La persona ingresada como dueño no existe. Por favor darla de alta.";
                    echo" <a href='nuevaPersona.php'> Dar de alta dueño</a>";
                }
                ?>
                <a href="nuevoAuto.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>