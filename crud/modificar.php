<?php
require("conex.php");
$id = $_POST["vid"];

$consulta = "SELECT * FROM formulario WHERE id = '$id' ";

$resultados = (mysqli_query($con, $consulta));

$fila = mysqli_fetch_array($resultados);

/*$nom = $fila['nombre'];
$email = $fila['email'];
$mens = $fila['mensaje'];*/

?>
<section id="modificar">
<form id="frmxajax" method="POST" class="modificarform">
	<h1>Modificar Registro</h1>
	<div class="fields">
		<div class="field">
			<!--<label for="name">Nombre</label> sin id funciona-->
			<input type="hidden" name="idm" id="idm" value="<?php  echo $fila['id']; ?>" />
		</div>
		<div class="field">
			<label for="namem">Nombre</label>
			<input type="text" name="namem" id="namem" value="<?php echo $fila['nombre']; ?>" required="required" />
		</div>
		<div class="field">
			<label for="emailm">Correo Electronico</label>
			<input type="email" name="emailm" id="emailm" value="<?php echo $fila['email']; ?>" required="required" />
		</div>
		<div class="field">
			<label for="messagem">Mensaje</label>
			<textarea name="messagem" id="messagem" rows="4"  required="required"><?php echo $fila['mensaje']; ?></textarea>
		</div>
	</div>
	<ul class="actions">
		<li><button onclick="modificarlo();">Modificar</button></li>
	<!--	<li><button onclick="modificarlo();">Modificar</button></li>
		<li><input type="submit" name="registro" value="enviar Mensaje" id="submit" class="submit" /></li> -->
	</ul>
	<!--<ul class="actions">
		<li><div id="resultm" ></div></li></ul> -->
</form>
<div id="resultam" ></div>
</section>