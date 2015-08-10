<?php
require_once("model.php");
require_once ("usuarioModel.php");
require_once ("tipoDomicilioModel.php");
require_once ("provinciaModel.php");
require_once ("localidadModel.php");
require_once ("profesionalModel.php");
require_once ('domicilioModel.php');

$usuario->usuarioModel($_POST["usuario"], $_POST["clave"], $_POST["mail"]);
$idusuario = $usuario->ultimo_id();

$profesional = new profesionalModel($_POST["apellido"], $_POST["nombre"], $_POST["telefono"], $idusuario, $idusuario, $_POST['observaciones']);
var_dump($profesional);die();

for ($i = 1; $i < 3; $i++) {
    new domicilioModel(
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