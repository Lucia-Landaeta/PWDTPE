<?php 
include_once '../configuracion.php';

$obj = new Persona();
$obj->setear(["nroDni" => "38859986", "nombre" => "Pepe", "apellido" => "PP", "fechaNac" => "1994-02-01", "telefono" => "2942587469", "domicilio" => "Callen.n 123"]);

if($obj->insertar()){
    echo "<br> El registro se inserto correctamente";
    verEstructura($obj);
}else 
    echo "<br>".$obj->getmensajeoperacion();

$obj->setTelefono("2942000000");

if($obj->modificar()){
    echo "<br> El registro se actualizo correctamente";
    verEstructura($obj);
}else
        echo "<br>".$obj->getmensajeoperacion();

        
if($obj->eliminar())
     echo "<br> El registro se elimino correctamente";
else
    echo "<br>".$obj->getmensajeoperacion();

$obj=new Persona();
$obj->setNroDni("28326986");
if($obj->cargar()){
     echo "<br> El registro se recupero correctamente";
     verEstructura($obj);
}else
    echo "<br>".$obj->getmensajeoperacion();

echo"LISTAR PERSONAS";
$arr=$obj->listar(null);
foreach($arr as $a){
    verEstructura($a);
}
echo"LISTAR PERSONAS";
$arr=$obj->listar("nroDni='28326986'");
foreach($arr as $a){
    verEstructura($a);
}
?>