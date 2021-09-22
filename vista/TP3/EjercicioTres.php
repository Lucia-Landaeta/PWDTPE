<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card border rounded shadow fw-bold">
                <div class="card-header rounded pb-0">
                    <p class="card-title fw-bold fs-5" style="color: #0081b5;"><i class="fas fa-edit"></i> Cinem@s</p>
                </div>
                <div class="card-body">
                    <form id="cinemas" name="cinemas" method="POST" action="accionTres.php" data-toggle="validator" enctype="multipart/form-data" novalidate>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input name="titulo" class="form-control" type="text" placeholder="Titulo">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Actores</label>
                                    <input name="actores" class="form-control" type="text" placeholder="Actores">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Director</label>
                                    <input name="director" class="form-control" type="text" placeholder="Director">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Guión</label>
                                    <input name="guion" class="form-control" type="text" placeholder="Guion">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Producción</label>
                                    <input name="produccion" class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Año</label>
                                    <input name="anio" class="form-control" type="number" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nacionalidad</label>
                                    <input name="nacionalidad" class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Género</label>
                                    <select name="genero" class="form-select">
                                        <option selected value="">...</option>
                                        <option value="Comedia">Comedia</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Terror">Terror</option>
                                        <option value="Romantica">Romántica</option>
                                        <option value="Suspenso">Suspenso</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Duración</label>
                                    <div class="input-group">
                                        <div class="row ms-0">
                                        <input name="duracion" class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="row">
                                        <label class="fw-light">(minutos)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label>Restricciones de Edad</label>
                                <div class="form-group pt-2">
                                    <div class="input-group">
                                        <label class="form-check-label ms-1 me-2 fw-light">
                                            <input class="form-check-input" type="radio" name="restriccion" value="atp">Todo Público
                                        </label>
                                        <label class="form-check-label ms-1 me-2 fw-light">
                                            <input class="form-check-input" type="radio" name="restriccion" value="m7">Mayores de 7 años
                                        </label>
                                        <label class="form-check-label ms-1 me-2 fw-light">
                                            <input class="form-check-input" type="radio" name="restriccion" value="m18">Mayores de 18 años
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>Imagen de la película:</label>
                                    <input class="form-control" type="file" name="archivo" id="archivo" accept=".jpeg,.gif,.jpg,.png" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Sinopsis</label>
                                    <textarea name="sinopsis" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                                <button class="btn btn-secondary" type="reset">Borrar</button>
                            </div>
                        </div>
                        <script>
                            $("#cinemas").bind("reset", function(event){
                                $("#cinemas").data('bootstrapValidator').resetForm();
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <p>
                Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les
                permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se
                deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>