<?php
require_once "Model.php";



class provinciaModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_provincias()

    {

        $result = $this->_db->query('SELECT * FROM provincias');


        $provincias = $result->fetch_all(MYSQLI_ASSOC);

        
        return $provincias;

    }

}
?>