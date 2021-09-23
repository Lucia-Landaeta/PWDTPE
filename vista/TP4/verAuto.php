<?php
$Titulo = "Ver Autos";
include_once("../estructura/header.php");
include_once("../../configuracion.php");
$ambA = new AbmAuto();
$abmP = new AbmPersona();
$listaAutos = $ambA->buscar(null);
?>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card border rounded shadow p-3">
                <?php
                if (count($listaAutos) > 0) {
                    echo "<b>LISTA DE AUTOS</b><hr>";
                    foreach ($listaAutos as $auto) {
                        $arrP = $abmP->buscar(["nroDni" => $auto->getObjDuenio()->getNroDni()]);
                        $duenio = $arrP[0];
                        echo "<pr>
                            <b>Patente :</b> " . $auto->getPatente() . "
                            <b>Marca :</b> " . $auto->getMarca() . "
                            <b>Modelo :</b> " . $auto->getModelo() . "
                            <br><b>Dueño</b><br>
                            <b>Nombre :</b> " . $duenio->getNombre() . "
                            <b>Apellido :</b> " . $duenio->getApellido() . "
                            </pr>
                            <hr>
                            ";
                    }
                } else {
                    echo " No hay autos cargados en la BD ";
                }
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <p>
                Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
                mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
                En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
                autos cargados.
            </p>
        </div>
    </div>
</div>
<?php
include_once("../estructura/footer.php");
?>