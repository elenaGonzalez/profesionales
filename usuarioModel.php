<?php
require_once "Model.php";



class usuarioModel extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_usuarios()

    {

        $result = $this->_db->query('SELECT * FROM usuarios');


        $usuarios = $result->fetch_all(MYSQLI_ASSOC);

        
        return $usuarios;

    }

    public function new_usuario($usuario,$clave,$mail,$rol){

    }

}
?>