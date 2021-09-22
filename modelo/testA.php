<?php 
include_once '../configuracion.php';
$duenio = new Persona();
$duenio->setear(["nroDni" => "25963874", "nombre" => "Marta", "apellido" => "Farias", "fechaNac" => "1975-06-21", "telefono" => "299-1559354", "domicilio" => "Roca 568"]);
$obj = new Auto();
$obj->setear(["patente" => "AAA 000", "marca" => "Ford", "modelo" => 2010, "objDuenio" => $duenio]);

if($obj->insertar()){
    echo "<br> El registro se inserto correctamente";
    verEstructura($obj);
}else 
    echo "<br>".$obj->getmensajeoperacion();

$obj->setModelo(1800);

if($obj->modificar()){
    echo "<br> El registro se actualizo correctamente";
    verEstructura($obj);
}else
        echo "<br>".$obj->getmensajeoperacion();

        
if($obj->eliminar())
     echo "<br> El registro se elimino correctamente";
else
    echo "<br>".$obj->getmensajeoperacion();

$obj=new Auto();
$obj->setPatente("POL 968");
if($obj->cargar()){
     echo "<br> El registro se recupero correctamente";
     verEstructura($obj);
}else
    echo "<br>".$obj->getmensajeoperacion();

echo"LISTAR AUTOS";
$arr=$obj->listar(null);
foreach($arr as $a){
    verEstructura($a);
}
echo"LISTAR AUTOS POR DUEÑO";
$arr=$obj->listar("dniDuenio='28326986'");
foreach($arr as $a){
    verEstructura($a);
}
?>