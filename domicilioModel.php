<?php
require_once "Model.php";



class domicilioModel extends Model

{    

    public function __construct($idprofesional=null,$idtipodom=null,$direccion=null,$idlocalidad=null)

    {

        parent::__construct();
        $result= $this->_db->query("Insert into domicilios (idprofesional,idtipodom,direccion,idlocalidad)"
                . " values('$idprofesional','$idtipodom','$direccion','$idlocalidad')");
        
        return $result;
    }



    public function get_domicilios()

    {

        $result = $this->_db->query('SELECT * FROM domicilios');


        $domicilios = $result->fetch_all(MYSQLI_ASSOC);

        
        return $domicilios;

    }
}
?>