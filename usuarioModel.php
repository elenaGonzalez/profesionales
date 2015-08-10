<?php
require_once "Model.php";

class usuarioModel extends Model{    

    public function __construct($usuario=null, $clave=null, $mail=null)
    {
       parent::__construct();
       $rol= 'usuario';
        $result= $this->_db->query("Insert into usuarios (usuario, clave, mail, rol) values('$usuario','$clave','$mail','$rol')");
     
        return $result;
    }

    public function ultimo_id(){
        $result = $this->_db->query("SELECT MAX(id) AS id FROM usuarios");
        $id_usuario = null;
        foreach ($result as $r){
            $id_usuario = $r['id'];
        }
        return $id_usuario;
    }

        public function get_usuarios()

    {

        $result = $this->_db->query('SELECT * FROM usuarios');


        $usuarios = $result->fetch_all(MYSQLI_ASSOC);

        
        return $usuarios;

    }


}
?>