<?php
$Titulo = "Buscar Persona";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card border rounded shadow fw-bold">
                <form id="buscarPersona" name="buscarPersona" method="POST" action="accionBuscarPersona.php" data-toggle="validator" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="nroDni" class="form-label">Ingrese número DNI:</label>
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
                Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
                numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
                busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                persona.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>