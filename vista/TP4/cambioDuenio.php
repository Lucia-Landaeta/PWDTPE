<?php
$Titulo = "Cambio Auto";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card border rounded shadow fw-bold">
                <form id="cambioDuenio" name="cambioDuenio" method="POST" action="accionCambioDuenio.php" data-toggle="validator" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="patente" class="form-label">Ingrese patente:</label>
                        <input class="form-control" type="text" id="patente" name="patente" required>
                    </div>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="nroDni" class="form-label">Ingrese Dni del nuevo Dueño:</label>
                        <input class="form-control" type="text" id="nroDni" name="nroDni" required>
                    </div>
                    <div class="col-sm-10 ps-3">
                        <button class="btn btn-primary mb-3" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <p>
                Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
                numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
                a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
                ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
                cargados.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>