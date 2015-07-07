<?php
require_once "Model.php";



class especialidadModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_especialidades()

    {

        $result = $this->_db->query('SELECT * FROM especialidades');


        $especialidades = $result->fetch_all(MYSQLI_ASSOC);

        
        return $especialidades;

    }

}
?>