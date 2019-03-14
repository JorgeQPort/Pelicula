<?php
	require('conex.php');

	$idmo = $_POST["idm"];
	$nomb= $_POST["namem"];
	$cor = $_POST["emailm"];
	$msj = $_POST["messagem"];

	 if ($idmo == "" or $nomb == "" or $cor == "" or $msj == "") {
     	
     		echo "<h2 id='modificartexto' style='color:red;'> Datos Vacios</h2>";
       
		 ///nombre = '".$nomb."', email = '".$cor."', mensaje = '".$msj."'
     } else {
     	$resultadom = mysqli_query($con, "UPDATE formulario SET nombre = '$nomb',email = '$cor',mensaje = '$msj' WHERE formulario.id = '$idmo' ");
     	//$sentencia = "UPDATE formulario SET nombre = '$nomb',email = '$cor',mensaje = '$msj' WHERE formulario.id = '$idmo' ";
		//$resultadom = (mysqli_query($con, $sentencia));
		//if ($filam = mysqli_fetch_array($resultadoel)){
		//if ($resultadom){
		$fila = mysqli_num_rows($resultadom);
		if ($fila ===0){//else{
					echo "<h2  id='modificar'>no se ha actualizado el Registro: #".$idmo."</h2>";
		} else {
		while ($filam = mysqli_fetch_array($resultadom)){
				$idmom = $filam['id'];
				$nombrem = $filam['nombre'];
				$emailm = $filam['email'];
				$mensjm = $filam['mensaje'];
				
			//echo "Registro Actualizado";
			echo "<h2 class='modificarform'> Registro con ID: #<strong style='color:red;'>".$idmom."</strong> ha sido Actualizado </h2>"
?>
			<section>
			<div class="table-wrapper">
			<table>
			<thead>
			<tr>
			 <th>con el Nombre: </th>
			 <th>correo:</th>  
			 <th>y Mensaje: </th>
			 </tr>
			 </thead>
<?php
			 "<tbody>
			 <tr>		 
			 <td>".$nombrem."</td>		 
			 <td>".$emailm."</td>
			 <td>".$mensjm."</td>
			 </tr>
			 </tbody>
			 <tfoot>
			<tr>
				<td colspan='2'></td>
				<td >Fin de Resultados</td>
			</tr>
			</tfoot>
			  </table>";
?>

			<tfoot>
			<tr>
				<td colspan='2'></td>
				<td >Fin de Resultados</td>
			</tr>
			</tfoot>
		</table>
	</div>
</section>
<?php
			}
		} 
		/*}
		if ($resultadom ==0){//else{
			echo "<h2  id='modificar'>no se ha actualizado el Registro: #".$idmo."</h2>";
		}*/
	
	}

 ?>
