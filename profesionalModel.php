<?php
require_once "Model.php";



class profesionalModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }

     public function new_profesional($apellido, $nombre, $telefono, $idusuario, $observaciones){
        
        $result= $this->_db->query("Insert into profesionales (apellido, nombre, telefono, idusuario, observaciones)"
                                    . " values('$apellido', '$nombre', '$telefono', '$idusuario', '$observaciones')"
                                 );
     
        return $result;
    }

    public function get_profesionales()

    {

        $result = $this->_db->query('SELECT * FROM profesionales');


        $profesionales = $result->fetch_all(MYSQLI_ASSOC);

        
        return $profesionales;

    }

}
?>