<?php
$Titulo = "Ver Dueños";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card border rounded shadow">
                <?php
                $abmP = new AbmPersona();
                $listaPersonas = $abmP->buscar(null);
                if (count($listaPersonas) > 0) {
                    echo "<b>LISTA DE DUEÑOS</b>";
                    foreach ($listaPersonas as $pers) {
                        echo "<pr>
                            <b>DNI :</b> " . $pers->getNroDni() . "
                            <b>Nombre :</b> " . $pers->getNombre() . "
                            <b>Apellido :</b> " . $pers->getApellido() . "
                            <b>Fecha de nacimiento :</b> " . $pers->getFechaNac() . "
                            <b>Telefono :</b> " . $pers->getTelefono() . "
                            <b>Domicilio :</b> " . $pers->getDomicilio() . "
                            </pr>
                            ";
                    }
                } else {
                    echo " No hay personas cargadas en la BD ";
                }
                ?>

                <div>
                    <a href="AutosPersona.php"><button type="button" class="btn btn-outline-primary mt-3">AutosPersona</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <p>
                Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                los datos de la persona y un listado de los autos que tiene asociados.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>