<?php
$Titulo = "Resultado Buscar autoPersona";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");
$abmP = new AbmPersona();
$abmA = new AbmAuto();
$datos = data_submitted();
$objAuto = null;
$objPers=null;
if (isset($datos['nroDni'])) {
    $arrPers = $abmP->buscar($datos);
    if (count($arrPers) == 1) {
        $objPers = $arrPers[0];
        $listaAutos = $objPers->getColAutos();
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card border p-1 rounded shadow ">
                <table class="table">
                    <thead >
                        <tr>
                            <th colspan="6" class="text-center table-secondary">
                                <h5>Información Persona</h5>
                            </th>
                        </tr>
                        <?php
                        if ($objPers != null) {
                            echo "
                        <tr>
                            <th scope='col'>DNI</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Apellido</th>
                            <th scope='col'>Fecha nacimiento</th>
                            <th scope='col'>Telefono</th>
                            <th scope='col'>Domicilio</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>" . $objPers->getNroDni() . "</td>
                            <td>" . $objPers->getNombre() . "</td>
                            <td>" . $objPers->getApellido() . "</td>
                            <td>" . $objPers->getFechaNac() . "</td>
                            <td>" . $objPers->getTelefono() . "</td>
                            <td>" . $objPers->getDomicilio() . "</td>
                        </tr>
                        <tr> 
                            <th class='table-secondary text-center' colspan='6'> <h5>Información Autos</h5></th>
                        </tr>
                        <tr>
                            <th scope='col' colspan='3'>Patente</th>
                            <th scope='col' colspan='2'>Marca</th>
                            <th scope='col' colspan='1'>Modelo</th>
                        </tr>
                        ";
                            if (count($listaAutos) > 0) {
                                foreach ($listaAutos as $objAuto) {
                                    echo "
                                    <tr>
                                        <td colspan='3'>". $objAuto->getPatente()."</td>
                                        <td colspan='2'>".$objAuto->getMarca()."</td>
                                        <td colspan='1'>".$objAuto->getModelo()."</td>

                                    </tr>
                                ";
                                }
                            }
                            echo "
                    </tbody>
                    ";
                        } else {
                            echo "
                            <tr>
                                <td colspan='4' scope='col'>La persona no se encuentra cargada.</td>
                            </tr>
                            ";
                        }
                        ?>
                </table>
                <a href="autosPersona.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>