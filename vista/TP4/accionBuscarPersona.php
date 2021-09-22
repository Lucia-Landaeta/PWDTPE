<?php
$Titulo = "Resultado Buscar auto";
include_once("../../vista/estructura/header.php");
include_once("../../configuracion.php");

$abmP = new AbmPersona();
$datos = data_submitted();
$objPers = null;
if (isset($datos['nroDni'])) {
    $arrPers = $abmP->buscar($datos);
    if (count($arrPers) == 1) {
        $objPers = $arrPers[0];
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card border p-1 rounded shadow p-4 fw-bold">
                
                <?php
                if ($objPers != null) { ?>
                    <form id="buscPersona" name="buscPersona" method="POST" action="actualizarDatosPersona.php" data-toggle="validator" novalidate>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <textarea id="nombre" name="nombre" cols="25" rows="1"><?php echo $objPers->getNombre() ?></textarea><br />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Apellido</label>
                                <textarea id="apellido" name="apellido" cols="25" rows="1"><?php echo $objPers->getApellido() ?></textarea><br />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>DNI</label><br/>
                                <input style="width: 200px" id="nroDni:" readonly name="nroDni" type="text" value="<?php echo $objPers->getNroDni() ?>"><br />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <textarea id="telefono" name="telefono" cols="25" rows="1"><?php echo $objPers->getTelefono() ?></textarea><br />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Domicilio</label>
                                <textarea id="domicilio" name="domicilio" cols="25" rows="1"><?php echo $objPers->getDomicilio() ?></textarea><br />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <textarea id="fechaNac" name="fechaNac" cols="25" rows="1"><?php echo $objPers->getFechaNac() ?></textarea><br />
                            </div>
                        </div>
                    </div>
                    <input id="accion" name ="accion" value="editar" type="hidden">
                    <div class="row mb-2">
                        <div class="d-grid gap-2 d-md-flex ">
                            <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <?php
                } else {
                    echo"EAEAEAE";
                }
                ?>
                <a href="buscarPersona.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>