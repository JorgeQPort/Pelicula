<?php
	require("conex.php");

	$ide = $_POST["vid"];

$consultae = "SELECT * FROM formulario WHERE id = '$ide' ";

$resultadose = (mysqli_query($con, $consultae));

$fila = mysqli_fetch_array($resultadose);

$nom = $fila['nombre'];
$email = $fila['email'];
$mens = $fila['mensaje'];

	$consulta = "DELETE FROM formulario WHERE id = '$ide' ";
	
	$resultados = (mysqli_query($con, $consulta));

	if ($resultados){
		echo " <h2 style='color: yellow; style='align: center;'> Registro: con ID: #<strong style='color: red;'>".$ide."</strong> ha sido Eliminado </h2>
		<table>
		<thead>
		<tr>
			 <th style='color:red;'>con el Nombre: </th>
			 <th style='color:red;'>correo:</th>  
			 <th style='color:red;'> Y Mensaje: </th>
		 </tr>
		 </thead>
		 <tbody>
		 <tr>
			<td style='color:yellow;'>".$nom."</td>
			<td style='color:yellow;'>".$email."</td>
			<td style='color:yellow;'>".$mens."</td>
		  </tr>
		  </tbody>
		  </table>"; 
	}
	else{
		echo "no se ha Eliminado el Registro: #<strong style='color: red;'>".$ide."</strong>";
	}

?>