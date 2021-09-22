<?php
$Titulo = "Resultado Buscar auto";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");
$abmP=new AbmPersona();
$abmA = new AbmAuto();
$datos = data_submitted();
$exito=false;
$objPers=null;
if (isset($datos['nroDni'])) {
    $arrPers = $abmP->buscar($datos);
    if (count($arrPers) == 1) {
        $objPers=$arrPers[0];
        if (isset($datos['patente'])) {
            $arrA=$abmA->buscar($datos);
            if(count($arrA)>0){
                $objA=$arrA[0];
                $exito = $abmA->modificacion(["patente"=>$datos["patente"],"marca"=>$objA->getMarca(),"modelo"=>$objA->getModelo(),"dniDuenio"=>$datos["nroDni"]]);
            }  
        }
    }     
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow p-4">
                <?php
                if($exito){
                    echo" El cambio de dueño se realizo con exito.";
                }else{
                    echo" Hubo un error";
                    if($objPers==null){
                        echo" La persona ingresada como nuevo dueño no existe. Por favor darla de alta.";
                        echo" <a href='nuevaPersona.php'> Dar de alta dueño</a>";
                    } 
                }
                ?>
                <a href="cambiarDueño.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>