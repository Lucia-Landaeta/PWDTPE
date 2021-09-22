<?php
$Titulo = "Resultado Buscar auto";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");

$abmA = new AbmAuto();
$datos = data_submitted();
$objAuto = null;
if (isset($datos['patente'])) {
    $arrAuto = $abmA->buscar($datos);
    if (count($arrAuto) == 1) {
        $objAuto = $arrAuto[0];
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow ">
                <table class="table">
                    <thead class="table-secondary">
                        <tr><th colspan="4" class="text-center"><h5>Información Auto</h5> </th></tr>
                        <?php
                        if($objAuto!=null){
                        echo"
                        <tr>
                            <th scope='col'>Patente</th>
                            <th scope='col'>Marca</th>
                            <th scope='col'>Modelo</th>
                            <th scope='col'>DNI Dueño</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>". $objAuto->getPatente()."</td>
                            <td>".$objAuto->getMarca()."</td>
                            <td>".$objAuto->getModelo()."</td>
                            <td>".$objAuto->getObjDuenio()->getNroDni()."</td>
                        </tr>
                    </tbody>
                    ";
                        }else{
                            echo"
                            <tr>
                                <td colspan='4' scope='col'>El auto con patente ".$datos['patente']." no se encuentra cargado.</td>
                            </tr>
                            ";
                        }
                    ?>
                </table>
                <a href="buscarAuto.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>