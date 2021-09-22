<?php
$Titulo = "Nuevo Auto";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card border rounded shadow fw-bold p-4">
                <form id="nuevaP" name="nuevaP" method="POST" action="accionNuevoAuto.php" data-toggle="validator" novalidate>
                    <div class="containerA">
                        <h5>Cargar Auto</h5>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Patente</label>
                                    <input name="patente" class="form-control" type="text" placeholder="Patente">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input name="marca" class="form-control" type="text" placeholder="Marca">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input name="modelo" class="form-control" type="text" placeholder="Modelo">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>DNI Dueño</label>
                                    <input name="dniDuenio" class="form-control" type="text" placeholder="DNI">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="d-grid gap-2 d-md-flex ">
                            <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <p>
                Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
                todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
                “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
                antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
                link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
                no cargar los datos
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>