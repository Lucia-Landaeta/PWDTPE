<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card border rounded shadow fw-bold ps-3">
                <h4>Ingresar la cantidad de horas de cursada por dia:</h4>
                <form class="form-horizontal" id="horas" name="horas" method="GET" action="accionDos.php" novalidate>
                    <div class="form-group">
                        <div class="row my-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Lunes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="lunes" id="lunes" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Martes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="martes" id="martes" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Miercoles</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="miercoles" id="miercoles" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Jueves</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="jueves" id="jueves" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Viernes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="viernes" id="viernes" required/>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-1" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <p>
            Crear una página php que contenga un formulario HTML que permita ingresar las horas
            de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
            Enviar los datos del formulario por el método Get a otra página php que los reciba y
            complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
            se cursan por semana.
            </p>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>