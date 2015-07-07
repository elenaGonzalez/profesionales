<?php
require_once "Model.php";



class localidadModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_localidades()

    {

        $result = $this->_db->query('SELECT * FROM localidades');


        $localidades = $result->fetch_all(MYSQLI_ASSOC);

        
        return $localidades;

    }

}
?>