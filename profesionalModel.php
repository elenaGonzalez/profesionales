<?php

require_once "Model.php";

class profesionalModel extends Model {

    public function __construct($apellido=null, $nombre=null,$telefono=null, $idusuario=null, $observaciones=null) {
     parent::__construct();
     $result = $this->_db->query("Insert into profesionales (apellido, nombre, telefono, idusuario, observaciones)"
                . " values('$apellido', '$nombre', '$telefono', '$idusuario', '$observaciones')"
        );

        return $result;
 }

  public function get_profesionales() {

        $result = $this->_db->query('SELECT * FROM profesionales');


        $profesionales = $result->fetch_all(MYSQLI_ASSOC);


        return $profesionales;
    }

    public function ultimo_id() {
        $result = $this->_db->query("SELECT MAX(id) AS id FROM profesionales");
        $id_usuario = null;
        foreach ($result as $r) {
            $id_usuario = $r['id'];
        }
        return $id_usuario;
    }

}

?>