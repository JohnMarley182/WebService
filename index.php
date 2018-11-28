<table border="1">
<thead>
<tr>
<td>Equipo</td>
<td>Numero Economico</td>
<td>Posicion</td>
<td>Descripcion</td></tr>
</thead>

<?php

$hostname = "localhost";
$database = "id8027515_fallas";
$user = "id8027515_admin";
$password = "Admin123";

$conexion = mysqli_connect($hostname, $user, $password, $database);

//$insert = "INSERT INTO registros (equipo, n_economico, posicion, falla) VALUES ('{$equipo}', '{$n_economico}', '{$posicion}', '{$falla}')";
$query = "SELECT * FROM registros";

$result = mysqli_query($conexion, $query);

$filas = $result -> num_rows;
echo "Número de Elementos: ", $filas;

for($i=0; $i<$filas; $i++)
{
	$dato = $result->fetch_object();
	echo "<tr>";
	echo "<td>".$dato->equipo."</td>";
	echo "<td>".$dato->n_economico."</td>";
	echo "<td>".$dato->posicion."</td>";
	echo "<td>".$dato->falla."</td>";
}

?>
</table>