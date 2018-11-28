<?php  

$hostname = "localhost";
$database = "id8027515_fallas";
$user = "id8027515_admin";
$password = "Admin123";

$json = array();

		$conexion = mysqli_connect($hostname, $user, $password, $database);

		$insert = "SELECT * FROM registros";

		$resultado_insert = mysqli_query($conexion, $insert);

		if($resultado_insert)
		{
			echo “<table border=’1’><tr><td>Equipo</td><td>Numero Economico</td><td>Posicion</td><td>Descripcion</td>
         	</tr><tr>”;
			//obtenemos los datos resultado de la consulta
    		while ($row = mysql_fetch_row($result))
    		{
               echo “<td>”.$row[0].”</td><td>”.$row[1].”</td>
              <td>”.$row[2].”</td>”.$row[3].”</td>”;
   			}
   			echo “</tr></table>”;
   		}
		else	
		{
			echo "error_log(message)";
		}	
	
?>