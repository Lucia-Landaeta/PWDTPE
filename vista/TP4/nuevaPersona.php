<?php
$Titulo = "Nueva Persona";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card border rounded shadow fw-bold p-4">
                <form id="nuevaPersona" name="nuevaPersona" method="POST" action="accionNuevaPersona.php" data-toggle="validator" novalidate>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" class="form-control" type="text" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Apellido</label>
                                <input name="apellido" class="form-control" type="text" placeholder="Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>DNI</label>
                                <input name="nroDni" class="form-control" type="text" placeholder="Dni">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input name="telefono" class="form-control" type="text" placeholder="Telefono">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Domicilio</label>
                                <input name="domicilio" class="form-control" type="text" placeholder="Domicilio">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input name="fechaNac" class="form-control" type="date" placeholder="">
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
                Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
                los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
                un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
                pudo o no cargar los datos de la persona.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>