<?php
require_once "Model.php";



class especialidadModel extends Model

{    

    public function __construct($esp_nombre=null)

    {

        parent::__construct();
        $result= $this->_db->query("Insert into especialidades (esp_nombre) values('$esp_nombre')");
        return $result;
    }



    public function get_especialidades()

    {

        $result = $this->_db->query('SELECT * FROM especialidades');


        $especialidades = $result->fetch_all(MYSQLI_ASSOC);

        
        return $especialidades;

    }

}
?>