<?php
include_once("../configuracion.php");

$abm = new AbmPersona();
$datos = ["nroDni" => "38859986", "nombre" => "Pepe", "apellido" => "PP", "fechaNac" => "1994-02-01", "telefono" => "2942587469", "domicilio" => "Callen.n 123"];

echo "* ALTA *";
if ($abm->alta($datos)) {
    echo "<br>Alta exitosa<br>";
    //verEstructura($obj);
} else
    echo "<br>" . $obj->getmensajeoperacion();

$datos = ["nroDni" => "38859986", "nombre" => "JOJO", "apellido" => "ARMANI", "fechaNac" => "1994-02-01", "telefono" => "2942587469", "domicilio" => "Callen.n 123"];
echo "* MODIFICACION *";
if ($abm->modificacion($datos)) {
    echo "<br> Modificacion exitosa<br>";
    //verEstructura($obj);
} else
    echo "<br>" . $obj->getmensajeoperacion();

echo "* BUSCAR *";

$lista = $abm->buscar($datos);
if (count($lista) == 1) {
    $obj = $lista[0];
}
echo"<br>Elemento encontrado";
verEstructura($obj);

echo "* BAJA *";
if ($abm->baja($datos)) {
    echo "<br> Baja exitosa<br>";
    //verEstructura($obj);
} else
    echo "<br>" . $obj->getmensajeoperacion();
