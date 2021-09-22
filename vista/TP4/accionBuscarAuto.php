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
                        if($objAuto!=null){ ?>
                        <tr>
                            <th scope='col'>Patente</th>
                            <th scope='col'>Marca</th>
                            <th scope='col'>Modelo</th>
                            <th scope='col'>DNI Dueño</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $objAuto->getPatente() ?> </td>
                            <td> <?php echo $objAuto->getMarca() ?> </td>
                            <td> <?php echo $objAuto->getModelo() ?> </td>
                            <td> <?php echo $objAuto->getObjDuenio()->getNroDni() ?> </td>
                        </tr>
                    </tbody>
                    <?php
                        }else{ ?>
                            <tr>
                                <td colspan='4' scope='col'>El auto con patente <?php echo $datos['patente'] ?> no se encuentra cargado.</td>
                            </tr>
                 <?php }
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