<?php
require_once "Model.php";



class tipoDomicilioModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_tipo_domicilios()

    {

        $result = $this->_db->query('SELECT * FROM tipo_domicilios');


        $tipo_domicilios = $result->fetch_all(MYSQLI_ASSOC);

        
        return $tipo_domicilios;

    }

}
?>