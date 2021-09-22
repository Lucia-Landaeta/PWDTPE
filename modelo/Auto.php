<?php
class Auto
{
    //Atributos de clase
    /** 
     * @var string $patente
     * @var string $marca
     * @var int $modelo
     * @var object $objDuenio
     * @var string $mensajeoperacion
     */

    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $mensajeoperacion;

    /** Constructor de la clase */
    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = 0;
        $this->objDuenio = "";
    }

    /** 
     * Setea un on objeto
     * @param array
     */
    public function setear($datos)
    {
        $this->setPatente($datos["patente"]);
        $this->setmarca($datos["marca"]);
        $this->setmodelo($datos["modelo"]);
        $this->setObjDuenio($datos["objDuenio"]);
    }

    //METODOS DE ACCESO
    //Retornan el valor de los atributos de la clase 
    /** @return string */
    public function getPatente()
    {
        return $this->patente;
    }
    /** @return string*/
    public function getMarca()
    {
        return $this->marca;
    }
    /** @return int */
    public function getModelo()
    {
        return $this->modelo;
    }
    /** @return object */
    public function getObjDuenio()
    {
        return $this->objDuenio;
    }
    /** @return string  */
    public function getMensajeOperacion()
    {
        return $this->mensajeoperacion;
    }

    //Modifican los atributos de clase
    /** @param string $patente */
    public function setPatente($patenteA)
    {
        $this->patente = $patenteA;
    }
    /** @param string $marcaA */
    public function setMarca($marcaA)
    {
        $this->marca = $marcaA;
    }
    /** @param string $modeloP */
    public function setModelo($modeloP)
    {
        $this->modelo = $modeloP;
    }
    /** @param string $duenio */
    public function setObjDuenio($duenio)
    {
        $this->objDuenio = $duenio;
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
        $sql = "SELECT * FROM auto WHERE patente = '" . $this->getPatente()."'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $duenio = new Persona();
                    $duenio->setNroDni($row["dniDuenio"]);
                    $duenio->cargar(); //?? 
                    $this->setear(["patente" => $row["patente"], "marca" => $row["marca"], "modelo" => $row["modelo"], "objDuenio" => $duenio]);
                    $resp=true;
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
        $sql = "INSERT INTO auto(patente, marca, modelo, dniDuenio) 
				VALUES (" . "'" . $this->getPatente() . "','" . $this->getMarca() . "'," . $this->getModelo() . ",'" . $this->getObjDuenio()->getNroDni() .  "')";
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
        $sql = "UPDATE auto SET marca='" . $this->getMarca() . "',modelo=" . $this->getModelo() . "
                           ,dniDuenio='" . $this->getObjDuenio()->getNroDni() ."' WHERE patente='" .  $this->getPatente()."'";
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
        $sql = "DELETE FROM auto WHERE patente='"  . $this->getPatente()."'";
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
         * @var array $arrA
         */
        $arrA = array();
        $base = new BaseDatos();
        $sql = "Select * from auto";
        if ($condicion != "") {
            $sql = $sql . ' where ' . $condicion;
        }
        $sql .= " order by patente ";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $obj = new Auto();
                        $duenio=new Persona();
                        $duenio->setNroDni($row["dniDuenio"]);
                        $duenio->cargar();
                        $obj->setear(["patente" => $row["patente"], "marca" => $row["marca"], "modelo" => $row["modelo"], "objDuenio" => $duenio]);
                        array_push($arrA, $obj);
                    }
                }
            } else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
        return $arrA;
    }
}
