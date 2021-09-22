<?php
$Titulo = "Buscar Auto de un dueño";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card border rounded shadow fw-bold">
                <form id="buscarPersona" name="buscarPersona" method="POST" action="accionAutoPersona.php" data-toggle="validator" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="nroDni" class="form-label">Ingrese número de Dni:</label>
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
                Página “autosPersona.php” que recibe un dni de una persona y muestra
                los datos de la persona y un listado de los autos que tiene asociados.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>