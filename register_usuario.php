<?php
?>
<html>
<head>
<title>Nuevo Usuario</title>
</head>
<body>
 <h1>Nuevo Usuario</h1>
    <form action="./new_usuario" method="POST">
    	<p><input type="text" name="usuario" placeholder="Ingrese nombre de usuario"/></p>
    	<p><input type="text" name="clave" placeholder="Ingrese clave"/></p>
        <p><input type="text" name="mail" placeholder="Ingrese mail"/></p>
    	<p><input type="submit" name="enviar" value="enviar"/></p>
    </form>
</body>