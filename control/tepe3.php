<?php
class controltp3{
    public function ej1($data){
        $dir = "../../upFiles/";
        $size = $data['archivo']['size'];
        $arrInfo = ['link'=>$dir, 'error'=>"", 'name'=>""];
        if ($data['archivo']['error'] <= 0) {
            if($size <= 2000000){
                if (!copy($data['archivo']['tmp_name'], $dir.$data['archivo']['name'])) {
                    $arrInfo['error'] = "ERROR: no se pudo copiar el archivo desde el directorio temporal.";
                }else{
                    $arrInfo['name'] = $data['archivo']['name'];
                    $arrInfo['link'] .= str_replace(" ", "%20", $arrInfo['name']);
                }
            }else{
                $arrInfo['error'] = "ERROR: El archivo supera los 2MB";
            }
        }else{
            $arrInfo['error'] = "ERROR: No se pudo cargar el archivo";
        }
        return $arrInfo;
    }

    public function ej2($data){
        $dir = "../../upFiles/";
        $arrInfo = ['link'=>$dir, 'error'=>"", 'name'=>$data['archivo']['name'], 'content'=>""];
        if($data['archivo']['error'] <= 0){
            if(pathinfo($data['archivo']['name'], PATHINFO_EXTENSION) == "txt"){
                if (!copy($data['archivo']['tmp_name'], $dir.$arrInfo['name'])) {
                    $arrInfo['error'] .= "ERROR: no se pudo copiar el archivo desde el directorio temporal.";
                }else{
                    $arrInfo['link'] .= str_replace(" ", "%20", $arrInfo['name']);
                    $arrInfo['content'] = file_get_contents($arrInfo['link']);
                }
            }else{
                $arrInfo['error'] .= "ERROR: El archivo no es .txt";
            }
        }else{
            $arrInfo['error'] .= "ERROR: No se pudo cargar el archivo";
        }
        return $arrInfo;
    }

    public function ej3($data, $file){
        $rpta = ['str'=>"", 'file'=>""];
        $dir = "../../upFiles/";
        $arrInfo = ['link'=>$dir, 'error'=>"", 'name'=>$file['archivo']['name']];
        $rest = $data['restriccion'];
        $rpta['str'] .= "<b>Título: </b>".$data['titulo']."<br />";
        $rpta['str'] .= "<b>Actores: </b>".$data['actores']."<br />";
        $rpta['str'] .= "<b>Director: </b>".$data['director']."<br />";
        $rpta['str'] .= "<b>Guión: </b>".$data['guion']."<br />";
        $rpta['str'] .= "<b>Produccion: </b>".$data['produccion']."<br />";
        $rpta['str'] .= "<b>Año: </b>".$data['anio']."<br />";
        $rpta['str'] .= "<b>Nacionalidad: </b>".$data['nacionalidad']."<br />";
        $rpta['str'] .= "<b>Género: </b>".$data['genero']."<br />";
        $rpta['str'] .= "<b>Duración: </b>".$data['duracion']." minutos<br />";
        $rpta['str'] .= "<b>Restricciones de edad: </b>";
        switch($rest){
            case "atp": $rpta['str'] .= "Apta para todo público<br />";break;
            case "m7": $rpta['str'] .= "Mayores de 7 años<br />";break;
            case "m18": $rpta['str'] .= "Mayores de 18 años<br />"; break;
        }
        $rpta['str'] .= "<b>Sinopsis: </b>".$data['sinopsis']."<br /><b>Imagen: <b><br />";
        
        if($file['archivo']['error'] <= 0){
            if (!copy($file['archivo']['tmp_name'], $dir.$arrInfo['name'])) {
                $arrInfo['error'] .= "ERROR: no se pudo copiar el archivo desde el directorio temporal.";
            }else{
                $arrInfo['link'] .= str_replace(" ", "%20", $arrInfo['name']);
            }
        }else{
            $arrInfo['error'] .= "ERROR: No se pudo cargar el archivo";
        }
        $rpta['file'] = $arrInfo;
        return $rpta;
    }
}
?>