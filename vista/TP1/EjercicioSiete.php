<?php 
$Titulo = "Ejercicio 7";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card border rounded shadow fw-bold py-3 px-3">
                <form class="ms-3" id="operacion" name="operacion" method="POST" action="accionSiete.php" data-toggle="validator" novalidate>
                    <div class="row text-center">
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="number" id="fi" name="fi" required>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="number" id="se" name="se" required>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <select class="form-select" name="op" required>
                                <option selected disabled>Seleccionar operación...</option>
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multi">Multiplicación</option>
                            </select>
                        </div>
                        <div class="col">
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4">
            <p>
                Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación.
            </p>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>