<?php  

     require_once "profesionalModel.php";



    $profesionalModel = new profesionalModel();

    $profesionales = $profesionalModel->get_profesionales();

?>
<html>
<head>
<title>Inicio</title>
</head>
<body>
    <p><a href="./register.php">Nuevo Profesional</a></p>
	<table>
		<thead>Profesionales</thead>
		<tbody>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Observacion</th>
				<th>Tel</th>
                                <?php //preguntar por rol del usuario logueado?>
			</tr>
			
			<?php 
				foreach ($profesionales as $profesional) {
				echo "<tr>";
					echo "<td>".$profesional['nombre']."</td>";
				
					echo "<td>".$profesional['apellido']."</td>";
					
					echo "<td>".$profesional['observaciones']."</td>";
				
					echo "<td>".$profesional['telefono']."</td>";

					echo "</tr>";
					
				}

			?>
			</tr>
		</tbody>
	</table>
</body>
</html>