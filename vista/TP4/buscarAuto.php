<?php
$Titulo = "Buscar Auto";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card border rounded shadow fw-bold">
                <form id="buscar" name="buscar" method="POST" action="accionBuscarAuto.php" data-toggle="validator" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="patente" class="form-label">Ingrese patente:</label>
                        <input class="form-control" type="text" id="patente" name="patente" required>
                    </div>
                    <div class="col-sm-10 ps-3">
                        <button class="btn btn-primary mb-3" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <p>
                Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
                de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
                usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
                la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
                convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>