<?php
class controltp1{
    public function ej1($data){
        $numero = $data['numero'];
        if($numero>0){
            $rpta = "El número recibido es positivo.";
        }elseif($numero<0){
            $rpta = "El número recibido es negativo.";
        }else{
            $rpta = "El número recibido es cero.";
        }
        return $rpta;
    }

    public function ej2($data){
        $array = [];
        $total = 0;
        foreach($data as $dia){
            if($dia != null){
                array_push($array, $dia);
                $total += (int)$dia;
            }else{
                array_push($array, 0);
            }
        }
        $rpta = "En total se cursan " . $total . " horas por semana.";
        return $rpta;
    }

    public function ej3a6($data){
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $edad = $data['edad'];
        $direccion = $data['direccion'];
        $estudios = $data['estudios'];
        $genero = $data['genero'];
        $deportes = $data['deporte'];
        $rpta = "";
        if($edad>=18){
            $rpta .= "Hola, yo soy ".$nombre." ".$apellido.", tengo ".$edad." años y vivo en ".$direccion.". ";
        }else{
            $rpta .= "Hola, yo soy ".$nombre." *******, tengo ".$edad." años y vivo en ******. ";
        }
        $rpta .= "Mi género es ".$genero.". ";
        if($estudios == 'none'){
            $rpta .= "No poseo estudios en ningún nivel. ";
        }else{
            $rpta .= "Poseo estudios de nivel ".$estudios.". ";
        }
        if(count($deportes)==0){
            $rpta .= "No practico deportes.";
        }else{
            $rpta .= "Practico ".count($deportes)." deportes en total.";
        }
        return $rpta;
    }

    public function ej7($data){
        $uno = $data['fi'];
        $dos = $data['se'];
        $op = $data['op'];
        if($op == 'suma'){
            $rpta = $uno." + ".$dos." = ".$uno + $dos;
        }
        if($op == 'resta'){
            $rpta = $uno." - ".$dos." = ".$uno - $dos;
        }
        if($op == 'multi'){
            $rpta = $uno." * ".$dos." = ".$uno * $dos;
        }
        return $rpta;
    }

    public function ej8($data){
        if($data['edad'] < 12){
            $precio = 160;
        }elseif($data['edad'] >= 12 && $data['estudiante'] == 'Si'){
            $precio = 180;
        }else{
            $precio = 300;
        }
        $rpta = "Datos: ".$data['nombre']." ".$data['apellido'].", ".$data['edad']." años. ".$data['direccion'].". ".$data['estudiante']." es estudiante. Precio de Entrada $".$precio;
        return $rpta;
    }
}
?>