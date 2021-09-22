<?php
class controltp2{
    public function ej3($data){
        $credenciales = [
            ['user' => 'fulano', 'pass' => 'contrasenia'],
            ['user' => 'mengano', 'pass' => 'contrasenia1'],
            ['user' => 'pepito', 'pass' => 'contrasenia2'],
            ['user' => 'pepon', 'pass' => 'contrasenia3'],
        ];
        $username = $data['user'];
        $password = $data['pass'];
        $ok = false;
        foreach($credenciales as $it){
            if($username == $it['user']){
                $ok = $password == $it['pass'];
                break;
            }
        }
        if($ok){
            $rpta = "Welcome!";
        }else{
            $rpta = "Wrong Credentials!";
        }
        return $rpta;
    }

    public function ej4($data){
        $rest = $data['restriccion'];
        $rpta = "<b>Título: </b>".$data['titulo']."<br />";
        $rpta .= "<b>Actores: </b>".$data['actores']."<br />";
        $rpta .= "<b>Director: </b>".$data['director']."<br />";
        $rpta .= "<b>Guión: </b>".$data['guion']."<br />";
        $rpta .= "<b>Produccion: </b>".$data['produccion']."<br />";
        $rpta .= "<b>Año: </b>".$data['anio']."<br />";
        $rpta .= "<b>Nacionalidad: </b>".$data['nacionalidad']."<br />";
        $rpta .= "<b>Género: </b>".$data['genero']."<br />";
        $rpta .= "<b>Duración: </b>".$data['duracion']." minutos<br />";
        $rpta .= "<b>Restricciones de edad: </b>";
        switch($rest){
            case "atp": $rpta .= "Apta para todo público<br />";break;
            case "m7": $rpta .= "Mayores de 7 años<br />";break;
            case "m18": $rpta .= "Mayores de 18 años<br />"; break;
        }
        $rpta .= "<b>Sinopsis: </b>".$data['sinopsis'];
        return $rpta;
    }
}
?>