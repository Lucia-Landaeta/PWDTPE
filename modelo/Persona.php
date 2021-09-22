<?php
class Persona
{
    //Atributos de clase
    /** 
     * @var string $nroDni
     * @var string $nombre
     * @var string $apellido
     * @var string $fechaNac
     * @var string $telefono
     * @var string $Domicilio
     * @var array $colAutos
     * @var string $mensajeoperacion
     */

    private $nroDni;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $colAutos;
    private $mensajeoperacion;

    /** Constructor de la clase */
    public function __construct()
    {
        $this->nroDni = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
        $this->colAutos = array();
    }

    /** 
     * Setea un on objeto
     * @param array
     */
    public function setear($datos)
    {
        $this->setNroDni($datos["nroDni"]);
        $this->setNombre($datos["nombre"]);
        $this->setApellido($datos["apellido"]);
        $this->setFechaNac($datos["fechaNac"]);
        $this->setTelefono($datos["telefono"]);
        $this->setDomicilio($datos["domicilio"]);
    }

    //METODOS DE ACCESO
    //Retornan el valor de los atributos de la clase 
    /** @return string */
    public function getNroDni()
    {
        return $this->nroDni;
    }
    /** @return string*/
    public function getNombre()
    {
        return $this->nombre;
    }
    /** @return string */
    public function getApellido()
    {
        return $this->apellido;
    }
    /** @return string */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    /** @return string */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /** @return string */
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    /** @return array */
    public function getColAutos()
    {
        if (count($this->colAutos) == 0) {
            $nuevoAuto = new Auto();
            $condicion = "dniDuenio='" . $this->getNroDni() . "'";
            $listaAutos = $nuevoAuto->listar($condicion);
            $this->setColAutos($listaAutos);
        }
        return $this->colAutos;
    }
    /** @return string  */
    public function getMensajeOperacion()
    {
        return $this->mensajeoperacion;
    }
    //Modifican los atributos de clase
    /** @param string $nroDni */
    public function setNroDni($id)
    {
        $this->nroDni = $id;
    }
    /** @param string $nom */
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }
    /** @param string $apellidoP */
    public function setApellido($apellidoP)
    {
        $this->apellido = $apellidoP;
    }
    /** @param string $fechaN */
    public function setFechaNac($fechaN)
    {
        $this->fechaNac = $fechaN;
    }
    /** @param string $telefonoP */
    public function setTelefono($telefonoP)
    {
        $this->telefono = $telefonoP;
    }
    /** @param string $domicP */
    public function setDomicilio($domicP)
    {
        $this->domicilio = $domicP;
    }
    /** @param string $arrAutos */
    public function setColAutos($arrAutos)
    {
        $this->colAutos = $arrAutos;
    }
    /** @param string $menaje */
    public function setMensajeOperacion($menaje)
    {
        $this->mensajeoperacion = $menaje;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE nroDni = " . $this->getNroDni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear(["nroDni" => $row["nroDni"], "nombre" => $row["nombre"], "apellido" => $row["apellido"], "fechaNac" => $row["fechaNac"], "telefono" => $row["telefono"], "domicilio" => $row["domicilio"]]);
                    $resp = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    /**
     * Inserta una funcion en la BD
     * @return boolean 
     */
    public function insertar()
    {
        /**
         * @var object $base
         * @var boolean $resp
         * @var string $sql
         */
        $base = new BaseDatos();
        $resp = false;
        $sql = "INSERT INTO persona(nroDni, nombre, apellido, fechaNac, telefono, domicilio) 
				VALUES (" . "'" . $this->getNroDni() . "','" . $this->getNombre() . "','" . $this->getApellido() . "','" . $this->getFechaNac() . "','"
            . $this->getTelefono() . "','" . $this->getDomicilio() . "')";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp =  true;
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $resp;
    }

    /**
     * Realiza una modificacion de un registro de la BD
     * @return boolean 
     */
    public function modificar()
    {
        /**
         * @var boolean $resp
         * @var object $base
         * @var string $sql
         */
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET nombre='" . $this->getNombre() . "',apellido='" . $this->getApellido() . "'
                           ,fechaNac='" . $this->getFechaNac() . "',telefono='" . $this->getTelefono() . "',domicilio='" . $this->getDomicilio()  . "' WHERE nroDni='" .  $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp =  true;
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $resp;
    }

    /**
     * Elimina un registro de la BD
     * @return boolean 
     */
    public function eliminar()
    {
        /**
         * @var object $base
         * @var boolean $resp
         * @var string $sql
         */
        $base = new BaseDatos();
        $resp = false;
        $sql = "DELETE FROM persona WHERE nroDni='"  . $this->getNroDni() . "'";
        echo "<br> Consulta: " . $sql;
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp =  true;
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $resp;
    }


    /**
     * Retorna un array de funciones que cumplan con una determinada condicion
     * @param string 
     * @return array
     */
    public static function listar($condicion = "")
    {
        /**
         * @var string $sql
         * @var object $base
         * @var array $arrP
         */
        $arrP = array();
        $base = new BaseDatos();
        $sql = "Select * from persona";
        if ($condicion != "") {
            $sql = $sql . ' where ' . $condicion;
        }
        $sql .= " order by nroDni ";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $obj = new Persona();
                        $obj->setear(["nroDni" => $row["nroDni"], "nombre" => $row["nombre"], "apellido" => $row["apellido"], "fechaNac" => $row["fechaNac"], "telefono" => $row["telefono"], "domicilio" => $row["domicilio"]]);
                        array_push($arrP, $obj);
                    }
                }
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $arrP;
    }


    // /**
    //  * Recupera los datos de una funcion por su id
    //  * @param int 
    //  * @return true en caso de encontrar los datos, false en caso contrario 
    //  */
    // public function Buscar($idF)
    // {
    //     /**
    //      * @var object $base
    //      * @var string $consultaPersona
    //      * @var boolean $resp
    //      */
    //     $base = new BaseDatos();
    //     $consultaPersona = "Select * from funcion where idFuncion=" . $idF;
    //     $resp = false;
    //     if ($base->Iniciar()) {
    //         if ($base->Ejecutar($consultaPersona)) {
    //             if ($row2 = $base->Registro()) {
    //                 $this->setIdFuncion($idF);
    //                 $this->setNombre($row2['nombre']);
    //                 $this->setHorarioInicio($row2['horarioInicio']);
    //                 $this->setDuracion($row2['duracion']);
    //                 $this->setPrecio($row2['precio']);
    //                 $this->setCostoSala($row2['costoSala']);
    //                 $this->setFecha($row2['fecha']);

    //                 $idTeatro = $row2['idTeatro'];
    //                 $teatro = new Teatro();
    //                 $teatro->buscar($idTeatro);

    //                 $this->setObjTeatro($teatro);
    //                 $resp = true;
    //             }
    //         } else {
    //             $this->setmensajeoperacion($base->getError());
    //         }
    //     } else {
    //         $this->setmensajeoperacion($base->getError());
    //     }
    //     return $resp;
    // }
    // /**
    //  * Retorna un string con la informacion de una funcion
    //  * @return string
    //  */
    // public function __toString(){
    //     /**
    //      * @var int $inicioHs
    //      * @var int $inicioMint
    //      * @var int $duracionMint
    //      */
    //     $inicioHs = intdiv(intval($this->getHorarioInicio()), 3600);
    //     $inicioMint = intdiv((intval($this->getHorarioInicio()) % 3600), 60);
    //     $duracionMint = intdiv(intval($this->getDuracion()), 60);

    //     return "ID Funcion: " . $this->getIdFuncion() . "\n" .
    //         "Nombre: " . $this->getNombre() . "\n" .
    //         "Fecha: " . $this->getFecha() . "\n" .
    //         "Horario de inicio: " . $inicioHs . ":" . $inicioMint . "\n" .
    //         "Duracion de funcion: " . $duracionMint . " minutos" . "\n" .
    //         "Precio: $" . $this->getPrecio() . "\n" .
    //         "Costo sala: $" . $this->getCostoSala() . "\n" .
    //         "Teatro al que pertenece: " . $this->getObjTeatro()->getnombre() . "\n";
    // }
}
