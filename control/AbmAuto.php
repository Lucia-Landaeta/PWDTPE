<?php
class AbmAuto
{

    /**
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $objAuto = $this->cargarObjeto($param);
        if ($objAuto != null and $objAuto->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto != null and $objAuto->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        echo"<br>Estoy en modificacion <br>";
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            echo"CLAVE SETEADA <br>";
            $objAuto = $this->cargarObjeto($param);
            if($objAuto!=null){
                echo"SE CARGO ES AUTO<br>";
            }else{
                echo"NO SE CARGO EL AUTO";
            }
            if ($objAuto != null and $objAuto->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['patente']))
                $where .= " and patente ='" . $param['patente'] . "'";
            if (isset($param['marca']))
                $where .= " and marca ='" . $param['marca'] . "'";
            if (isset($param['modelo']))
                $where .= " and modelo ='" . $param['modelo'] . "'";
            if (isset($param['dniDuenio']))
                $where .= " and dniDuenio ='" . $param['dniDuenio'] . "'";
        }
        //echo "WHERE : " . $where;
        $arreglo = Auto::listar($where);
        return $arreglo;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    public function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('patente', $param) and array_key_exists('marca', $param) and array_key_exists('modelo', $param)and array_key_exists('dniDuenio', $param)) {
            echo"LAS KEYS EXISTEN<br>";
            $abmP = new AbmPersona();
            $arrP = ($abmP->buscar(["nroDni"=>$param["dniDuenio"]]));
            if(count($arrP) == 1){
                $objD=$arrP[0];
                $obj = new Auto();
                $obj->setear(["patente" => $param["patente"], "marca" => $param["marca"], "modelo" => $param["modelo"], "objDuenio" => $objD]);
            }
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;
        if (isset($param['patente'])) {
            $obj = new Auto();
            $obj->setear(["patente" => $param["patente"], "marca" => null, "modelo" => null, "objDuenio" => null]);
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }
}
