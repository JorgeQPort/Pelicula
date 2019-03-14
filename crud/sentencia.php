<?php 
	require('conex.php');

	$nombre=$_POST['name'];
	$correo=$_POST['email'];
	$mensaje=$_POST['message'];

	if ($nombre != "" && $correo != "" && $mensaje != "") {

		$sql="INSERT into formulario (nombre, email, mensaje)
				values ('$nombre', '$correo', '$mensaje')";
		$result = mysqli_query($con,$sql);
		if ($result) {
			echo "<h4 style='color: yellow;'>Se Registro con Éxito  <strong style='color: red;'>".$nombre."</strong> de correo <strong style='color: red;'>".$correo. "</strong> Y Mensaje <strong style='color: red;'>".$mensaje."</strong></h2>" ;
		}
		else
			echo "problemas al insertar";
		}
	else {
 	echo "<h2 style='color:yellow;'> Datos Vacios</h2>";
 	}
 ?>
<?php
/*echo $data;*/
/*//Filtro anti-XSS
$nombre = htmlspecialchars(mysqli_real_escape_string($conexion, $nombrePOST));
$email = htmlspecialchars(mysqli_real_escape_string($conexion, $passPOST));
$mensj = htmlspecialchars(mysqli_real_escape_string($conexion, $mensajePOST));*/

//Archivo de conexión a la base de datos
/*require('conex.php');
if(isset($_POST['submit'])){
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$mensaje = $_POST['message'];*/

	/*$sel = ("SELECT * FROM formulario WHERE email = '$email' " ); 
	$vals = mysqli_query($con, $sel);
	
	if($vals == 1){
		echo "Resistro de Email: ¡ya Existe!" ;
	}
	else {*/
			
	/*	$insert = "INSERT INTO formulario (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje') ";

		$val = mysqli_query($con, $insert);

		if ($val) {
		echo "<span>se Guardo el ".$nombre.", ".$email." y ".$mensaje." Con ¡Éxito!</span>";
		}
}
mysqli_close($con);
*/


/*

<?php

$most = "SELECT * FROM  "
$mostrar = mysqli_query($con, $most);

$i = 0

while ($datos == mysqli_fetch_array($mostrar)) {
	$id = $datos['id'];
	$nombre = $datos['nombre'];
	$email = $datos['email'];
	$mensaje = $datos['mensaje'];
	i++;
?>
} */
?>