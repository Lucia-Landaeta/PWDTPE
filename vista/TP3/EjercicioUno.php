<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card border rounded shadow">
                <form name="ejeuno" method="POST" enctype="multipart/form-data" action="accionUno.php">
                    <div class="p-3 me-5">
                        <label class="form-label fw-bold">Ingrese su archivo</label>
                        <input class="form-control m-3" type="file" name="archivo" id="archivo" accept=".doc,.pdf" />
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3">
            <p>
            Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
            controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
            máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
            cargado, en caso contrario mostrar un mensaje indicando el problema.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>