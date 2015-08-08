<?php
require_once("model.php");
require_once ("usuarioModel.php");
require_once ("tipoDomicilioModel.php");
require_once ("provinciaModel.php");
require_once ("localidadModel.php");
require_once ("profesionalModel.php");
require_once 'domicilioModel.php';
$usuario = new usuarioModel();
$usuario->new_usuario($_POST["usuario"], $_POST["clave"], $_POST["mail"]);
$idusuario = $usuario->ultimo_id();

$profesional = new profesionalModel();

$profesional->new_profesional($_POST["apellido"], $_POST["nombre"], $_POST["telefono"], $idusuario, $idusuario, $_POST['observaciones']);

//guardar domicilio: campos idprofesional,idtipodom,direccion,idlocalidad
$domicilio = new domicilioModel();
for ($i = 1; $i < 3; $i++) {
    $domicilio->new_domicilio(
            $profesional->ultimo_id(), $_POST['tipo' . $i], $_POST['domicilio' . $i], $_POST['localidad']);
}
?>

<html>
    <head>
        <title>Nuevo Profesional</title>
    </head>
    <body>
<?php
    echo 'El Profesional se ha creado satisfactoriamente';
?>
    </body>
</html>