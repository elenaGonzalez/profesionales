<?php
require_once("model.php");
require_once ("usuarioModel.php");
require_once ("tipoDomicilioModel.php");

$usuario=new usuarioModel();
$usuario->new_usuario($_POST["usuario"],$_POST["clave"],$_POST["mail"]);
$idusuario = $usuario->ultimo_id();

$profesional=new profesionalModel();
$profesional->new_profesional($_POST["apellido"],$_POST["nombre"],$_POST["telefono"],$idusuario,
                            $idusuario,$_POST['observaciones']);

//guardar domicilio: campos idprofesional,idtipodom,direccion,idlocalidad
$domicilio= new domicilioModel();

    $domicilios->new_domicilio($_POST['idprofesional'], $_POST['idtipodom'], $_POST['direccion'], $_POST['idlocalidad']);
    $domicilios->new_domicilio($idprofesional, $idtipodom, $direccion, $idlocalidad);

?>

<html>
<head>
<title>Nuevo Profesional</title>
</head>
<body>
 <?php if($result):
     echo 'El Profesional se ha creado satisfactoriamente';
     else:
         echo 'Error al crear el Profesional';
    endif;
?>
</body>
</html>