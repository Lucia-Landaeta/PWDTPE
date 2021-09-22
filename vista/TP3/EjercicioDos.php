<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card border rounded shadow">
                <form name="ejedos" method="POST" enctype="multipart/form-data" action="accionDos.php">
                    <div class="p-3 me-5">
                        <label class="form-label fw-bold">Ingrese su archivo</label>
                        <input class="form-control m-3" type="file" name="archivo" id="archivo" accept=".txt" />
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3">
            <p>
                Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>