<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card border rounded shadow fw-bold py-3 px-3">
                <form class="ms-3" id="datos" name="datos" method="POST" action="accionOcho.php" data-toggle="validator" novalidate>
                    <div class="row text-center">
                        <div class="col-sm-6 mb-3">
                            <input class="form-control" name="nombre" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <input class="form-control" name="apellido" type="text" placeholder="Apellido" required>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <input class="form-control" name="edad" type="number" placeholder="Edad" required>
                        </div>
                        <div class="col-sm-9 mb-3">
                            <input class="form-control" name="direccion" type="text" placeholder="Dirección" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label>Estudiante</label>
                            <div class="form-group pt-2">
                                <label class="radio ms-1 me-2 fw-light">
                                    <input type="radio" id="si" name="estudiante" value="Si" required> Sí
                                </label>
                                <label class="radio ms-1 me-2 fw-light">
                                    <input type="radio" id="no" name="estudiante" value="No" required> No
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 my-3">
                            <button class="btn btn-success" type="submit">Enviar</button>
                            <button class="btn btn-secondary" type="reset">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <p>
            La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
            función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
            clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
            es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
            de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
            formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
            un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
            Agregar un botón para limpiar el formulario y volver a consultar.
            </p>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>