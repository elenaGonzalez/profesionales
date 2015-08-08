<?php 
require_once("model.php");
require_once ("provinciaModel.php");
require_once ("tipoDomicilioModel.php");
require_once ("localidadModel.php");

$provincia = new provinciaModel();
$provincias = $provincia->get_provincias();
$localidad = new localidadModel();
$localidades = $localidad->get_localidades();

$tipo = new tipoDomicilioModel();
$tipos = $tipo->get_tipo_domicilios();
?>
<html>
<head>
<title>Nuevo Profesional</title>
</head>
<body>
    <h1>Datos del Nuevo Usuario</h1>
    <form action="new_profesional.php" method="POST">
      <p><input type="text" name="usuario" placeholder="Nombre de usuario"/></p>
    	<p><input type="text" name="clave" placeholder="Clave"/></p>
        <p><input type="text" name="mail" placeholder="Mail"/></p>
         <div>    
        <h1>Datos del Profesional</h1>
    	<p>
    	<input type="text" name="nombre" placeholder="Nombre"/>
    	</p>
    	<p>
    	<input type="text" name="apellido" placeholder="Apellido"/>
    	</p>
    	<p>
    	<input type="text" name="telefono" placeholder="Telefono"/>
    	</p>
         <p>
    	<input type="text" name="domicilio1" placeholder="Domicilio 1"/>
    	</p>
         <p>
             <select name="tipo1">
                <?php                
                foreach ($tipos as $key => $tipo) {
                ?>
                <option value="<?php echo $key;?>"><?php echo $tipo['descripcion'];?></option>
                <?php }?>
            </select>
    	</p>
         <p>
    	<input type="text" name="domicilio2" placeholder="Domicilio 2"/>
    	</p>
         <p>
             <select name="tipo2">
                <?php                
                foreach ($tipos as $key => $tipo) {
                ?>
                <option value="<?php echo $key;?>"><?php echo $tipo['descripcion'];?></option>
                <?php }?>
            </select>
    	</p>
        <p>
            <select name="provincia">
                <?php                
                foreach ($provincias as $key => $provincia) {
                ?>
                <option value="<?php echo $key;?>"><?php echo $provincia['nombre'];?></option>
                <?php }?>
            </select>
            <?php //debo hacer un select asociado para traer todas las ciudades de la provincia seleccionada ?>
         <p>
        <select name="localidad">
                <?php                
                foreach ($localidades as $key => $localidad) {
                ?>
                <option value="<?php echo $key;?>"><?php echo $localidad['ciudad'];?></option>
                <?php }?>
            </select>
         </p>
         <p>
            <textarea rows="10" cols="30" name="observaciones" placeholder="Observaciones"></textarea>
    	</p>
         <p><input type="submit" name="enviar" value="enviar"/></p> 
  </div>
    </form>
</body>
</html>