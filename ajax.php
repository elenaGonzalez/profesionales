<?php
require_once "localidadModel.php";

class ajax extends Model

{    

    public function __construct()

    {

        parent::__construct();

    }



    public function get_traigo_localidades($id)

    {
	$localidad = new localidadModel;
	
	$localidades = $localidad->get_ciudadesDeProvincias($id);

    var_dump($localidades);
  $opciones="";
 		foreach($localidades as $id=>$ciudad){
			$opciones=$opciones.'<option value="'.$id.'">'.$ciudad.'</option>';
		}
       	
    echo $opciones;
    }

}
$pepito = new ajax;
$pepito->get_traigo_localidades($_POST["id_provincia"]);
?>