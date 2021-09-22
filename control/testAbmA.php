<?php
include_once("../configuracion.php");

$abm = new AbmAuto();
$datos = ["patente" => "AAA 111", "marca" => "SUSUKI", "modelo" => 2020, "dniDuenio" => "22985265"];
// $datos2 = ["patente"=>"CCC 000","marca"=>"PEUGEOT","modelo"=>2021,"dniDuenio" => "22985265", "nombre" => "Claudia", "apellido" => "Ramirez", "fechaNac" => "1971-05-16", "telefono" => "299-9854155", "domicilio" => "Sarmiento 55"];

echo "* ALTA *";
if ($abm->alta($datos)) {
    echo "<br>Alta exitosa<br>";
    //verEstructura($obj);
} else
echo"<br>ERROR alta<br>";
    // echo "<br>" . $obj->getmensajeoperacion();

$datos = ["patente" => "AAA 111", "marca" => "JOJYO", "modelo" => 2020, "dniDuenio" => "22985265"];
echo "* MODIFICACION *";
if ($abm->modificacion($datos)) {
    echo "<br> Modificacion exitosa<br>";
} else{
    echo "<br>Hubo un error<br>";
}

echo "* BUSCAR *";
$lista = $abm->buscar($datos);
if (count($lista) == 1) {
    $obj = $lista[0];
    echo "<br>Elemento encontrado";
    verEstructura($obj);
}else{
    echo"ERROR";
}


echo "* BAJA *";
if ($abm->baja($datos)) {
    echo "<br> Baja exitosa<br>";
    //verEstructura($obj);
} else
    echo "<br>" . $obj->getmensajeoperacion();
