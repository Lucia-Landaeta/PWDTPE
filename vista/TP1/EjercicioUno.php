<?php 
$Titulo = "Ejercicio 1";
include_once("../../vista/estructura/header.php"); 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <div class="card border rounded shadow fw-bold">
                <form id="num" name="num" method="POST" action="accionUno.php" data-toggle="validator" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="numero" class="form-label">Ingrese un numero:</label>
                        <input class="form-control" type="number" id="numero" name="numero" required>
                    </div>
                    <div class="col-sm-10 ps-3">
                        <button class="btn btn-primary mb-3" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <p>
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.
            </p>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>

