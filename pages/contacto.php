<section id="wrapper">
	<!-- <header> -->
	<div class="innerd"  id="un-id">
		<h2 class="Element">Danos tu Apreciación acerca de la Pagina!</h2>
		<p>Tus Recomendaciones las tomamos muy en Serio.</p>
	</div>

	<section id="modificar">
<form id="frmajax" method="POST" class="modificarform">
	<h1>Sección de Comentarios</h1>
	<div class="fields">
		<div class="field">
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="Agregar Nombre" required="required" />
		</div>
		<div class="field">
			<label for="email">Correo Electronico</label>
			<input type="email" name="email"  id="email" placeholder="Agregar Email" required="required" />
		</div>
		<div class="field">
			<label for="message">Mensaje</label>
			<textarea name="message" id="message" rows="4" placeholder="Agregar Email" required="required"></textarea>
		</div>
	</div>
	<ul class="actions">
		<li><button id="btnguardar">agregar comentario</button></li>
	<!--	<li><input type="submit" name="registro" value="enviar Mensaje" id="submit" class="submit" /></li> -->
	</ul>
	<!--<ul class="actions">
		<li><div id="resultm" ></div></li></ul> -->
<div id="result" ></div>
</form>
</section>