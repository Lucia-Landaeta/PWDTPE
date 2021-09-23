<?php
class AbmPersona{

    /**
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $objPersona = $this->cargarObjeto($param);
        if ($objPersona!=null and $objPersona->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoConClave($param);
            $ambA=new AbmAuto();
            $arrA=$ambA->buscar(["dniDuenio"=>$param['nroDni']]);
            foreach($arrA as $aut){
                $ambA->baja(["patente"=>$aut->getpatente()]);
            }
            if ($objPersona!=null and $objPersona->eliminar()){
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
    public function modificacion($param){
        //echo "Estoy en modificacion<br>";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjeto($param);
            if($objPersona!=null and $objPersona->modificar()){
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
            if (isset($param['nroDni']))
                $where .= " and nroDni ='" . $param['nroDni']."'";
            if (isset($param['nombre']))
                $where .= " and nombre ='" . $param['nombre'] . "'";
            if (isset($param['apellido']))
                $where .= " and apellido ='" . $param['apellido'] . "'";
            if (isset($param['fechaNac']))
                $where .= " and fechaNac ='" . $param['fechaNac'] . "'";
            if (isset($param['telefono']))
                $where .= " and telefono ='" . $param['telefono'] . "'";
            if (isset($param['domicilio']))
                $where .= " and domicilio ='" . $param['domicilio'] . "'";
        }
        //echo "WHERE : " . $where;
        $arreglo = Persona::listar($where);
        return $arreglo;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('nroDni',$param) and array_key_exists('nombre',$param) and array_key_exists('apellido',$param) and array_key_exists('fechaNac',$param) and array_key_exists('telefono',$param) and array_key_exists('domicilio',$param)){
            $obj = new Persona();
            $obj->setear(["nroDni" => $param["nroDni"], "nombre" => $param["nombre"], "apellido" => $param["apellido"], "fechaNac" => $param["fechaNac"], "telefono" => $param["telefono"], "domicilio" => $param["domicilio"]]);
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return object
     */
    private function cargarObjetoConClave($param){
        $obj = null; 
        if( isset($param['nroDni']) ){
            $obj = new Persona();
            $obj->setear(["nroDni" => $param["nroDni"], "nombre" => null, "apellido" => null, "fechaNac" => null, "telefono" => null, "domicilio" => null]);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['nroDni']))
            $resp = true;
        return $resp;
    }
    

    
}
