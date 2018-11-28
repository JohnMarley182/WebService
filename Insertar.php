<?php 

$hostname = "localhost";
$database = "id8027515_fallas";
$user = "id8027515_admin";
$password = "Admin123";

$json = array();

	if(isset($_GET["equipo"]) && isset($_GET["n_economico"]) && isset($_GET["posicion"]) && isset($_GET["falla"]) )
	{
		$equipo = $_GET['equipo'];	
		$n_economico = $_GET['n_economico'];
		$posicion = $_GET['posicion'];
		$falla = $_GET['falla'];

		$conexion = mysqli_connect($hostname, $user, $password, $database);

		$insert = "INSERT INTO registros (equipo, n_economico, posicion, falla) VALUES ('{$equipo}', '{$n_economico}', '{$posicion}', '{$falla}')";

		$resultado_insert = mysqli_query($conexion, $insert);

		if($resultado_insert)
		{
			$consulta = "SELECT * FROM registros WHERE equipo = '$equipo' ";
			$resultado = mysqli_query($conexion, $consulta);

			if($registro = mysqli_fetch_array($resultado))
			{
				$json['usuario'][] = $registro;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}
		else	
		{
			$resulta["equipo"] = "ND";
			$resulta["n_economico"] = 000;
			$resulta["posicion"] = "ND";
			$resulta["falla"] = "ND";
			$json['usuario'][] = $resulta;
			echo json_encode($json);
		}	
	}
	else
	{
		$resulta["equipo"] = "No Registró";
		$resulta["n_economico"] = 000;
		$resulta["posicion"] = "No Registró";
		$resulta["falla"] = "No Registró";
		$json['usuario'][] = $resulta;
		echo json_encode($json);
	}

?>