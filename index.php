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
    <p><a href="./register_usuario.php">Nuevo Profesional</a></p>
	<table>
		<thead>Profesionales</thead>
		<tbody>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Observacion</th>
				<th>Tel</th>
			</tr>
			
			<?php 
				foreach ($profesionales as $profesional) {
				echo "<tr>";
					echo "<td>".$profesional['pro_nombre']."</td>";
				
					echo "<td>".$profesional['pro_apellido']."</td>";
					
					echo "<td>".$profesional['observaciones']."</td>";
				
					echo "<td>".$profesional['pro_telefono']."</td>";

					echo "</tr>";
					
				}

			?>
			</tr>
		</tbody>
	</table>
</body>
</html>