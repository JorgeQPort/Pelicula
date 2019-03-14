<?php
//Archivo de conexión a la base de datos
require('conex.php');

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = mysqli_query($con, "SELECT * FROM formulario As a
	WHERE a.nombre COLLATE UTF8_SPANISH2_CI LIKE '%$consultaBusqueda%'
	OR a.email COLLATE UTF8_SPANISH2_CI LIKE '%$consultaBusqueda%'
	OR CONCAT(a.nombre,' ',a.email) COLLATE UTF8_SPANISH2_CI LIKE '%$consultaBusqueda%'
	");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		echo  "<h2 style='color:yellow;'>No hay ningún usuario con la busqueda: <strong style='color:red;'>".$consultaBusqueda."</strong></h2>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo '<h2 style="color:yellow;">Resultados para <strong style="color:red;">'.$consultaBusqueda.'</strong></h2>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
?>
		<section>
	<div class="table-wrapper">
		<table>
			<thead>
				<tr>
					<th style='color:red;'>Id</th>
					<th style='color:red;'>NOMBRE</th>
					<th style='color:red;'>EMAIL</th>
					<th style='color:red;'>MENSAJE</th>
					<th style='color:red;' colspan="2" style="padding-left: 6.5%;">OPCIONES</th>
				</tr>
			</thead>
			
<?php
		while($resultados = mysqli_fetch_array($consulta)) {
			$id = $resultados['id'];
			$nombre = $resultados['nombre'];
			$email = $resultados['email'];
			$mensj = $resultados['mensaje'];

			//Output
			$mensaje .= "
			<tbody>
				<tr>
					<td style='color:yellow; font-weight: bolt;'>".$id."</td>
					<td style='color:yellow; font-weight: bolt;'>".$nombre."</td>
					<td style='color:yellow; font-weight: bolt;'>".$email."</td>
					<td style='color:yellow; font-weight: bolt;'>".$mensj."</td>
					<td><a style='cursor:pointer; color:yellow;' onclick='modificar(".$resultados['id'].");'>Modificar</a></td>
					<td><a style='cursor:pointer; color:yellow;' onclick='eliminar(".$resultados['id'].");'>Eliminar</a></td>
				</tr>
			</tbody>
			";
			

		};//Fin while $resultados

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>
		<tfoot>
			<tr>
				<td colspan="2"></td>
				<td><strong style="color:red;">Fin de</strong> <strong  style='color:yellow;'>Resultados</strong></td>
			</tr>
		</tfoot>

</table>
	</div>
	<div id="resultadom"></div>
</section>

			<!--
			
			<p><strong>ID:</strong> '.$id.'<br>
			<strong>Nombre:</strong> ' . $nombre . '<br>
			<strong>email:</strong> ' . $email . '<br>
			<strong>mensaje:</strong> ' . $mensaje . '<br>
			</p>-->
<?php

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

	/*$nombre=$_POST['name'];
	$email=$_POST['email'];
	$mensaje=$_POST['message'];

	$sql="INSERT INTO formulario (nombre,email,mensaje)
			values ('$nombre','$email','$mensaje')";
	echo mysqli_query($con,$sql);*/
?>