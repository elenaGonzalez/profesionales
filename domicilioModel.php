<?php
require_once "Model.php";



class domicilioModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_domicilios()

    {

        $result = $this->_db->query('SELECT * FROM domicilios');


        $domicilios = $result->fetch_all(MYSQLI_ASSOC);

        
        return $domicilios;

    }
    //arreglar: necesito poder guardar un array de domicilios 
    public function new_domicilio($idprofesional, $idtipodom, $direccion, $idlocalidad){
        $result= $this->_db->query("Insert into domicilios (idprofesional,idtipodom,direccion,idlocalidad)"
                . " values('$idprofesional','$idtipodom','$direccion','$idlocalidad')");
        
        return $result;
    }

}
?>