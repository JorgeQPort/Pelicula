<!-- Footer -->
	<!--	<div class="footer"> -->
		<section id="footer">
			<div class="inner">
				<h4 class="major">Contactenos</h4>
				<p class="parag">Deja un mensaje acerca de nuestro sitio para el entretenimiento desde tu Hogar.</p>
				<!-- formulario pie de pagina -->
				<form  id="frmajax" method="POST">
					<div class="fields">
						<div class="field">
							<label for="name">Nombre</label>
							<input type="text" name="name" id="name" required="required" />
						</div>
						<div class="field">
							<label for="email">Correo Electronico</label>
							<input type="email" name="email" id="email" required="required" />
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="4" maxlength="150" required="required"></textarea>
						</div>
					</div>
					<ul class="actions">
						<li><button id="btnguardar">Enviar Mensaje</button></li>
					<!--	<li><input type="submit" name="registro" value="enviar Mensaje" id="submit" class="submit" /></li> -->
					</ul>					
				<div id="result" ></div>
				</form>
				<ul class="contact">
					<li class="fa-home">
						<p class="prg">Untitled Inc <br/>
						1234 Somewhere Road Suite #2894 <br/>
						Nashville, TN 00000-0000 </p> 
					</li>
					<li class="fa-phone"><p class="prg">(000) 000-0000</p></li>
					<li class="fa-envelope"><a href="#"><p class="prg">information@untitled.tld</p></a></li>
					<li class="fa-twitter"><a href="#"><p class="prg">twitter.com/untitled-tld</p></a></li>
					<li class="fa-facebook"><a href="#"><p class="prg">facebook.com/untitled-tld</p></a></li>
					<li class="fa-instagram"><a href="#"><p class="prg">instagram.com/untitled-tld</p></a></li>
					<li class="fa-list-alt"><a href="?p=comentarios"><p class="<?php echo $pagina == 'comentarios' ? 'active' : ''; ?>" >Administrar Comentarios</p></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://monarcadigital.com">Monarca</a></li>
				</ul>
			</div>
		</section>

<script>
		
		/*$(document).ready(function(){
			$("form").submit(function(e){
				e.preventDefault();
			var name = $("input#name").val();
			var correo = $("input#email").val();
			var mens = $("input#message").val();
			$.ajax({
				url: "crud/sentencia.php",
				method: "post",
				data: {nombre: name, email: correo, mensj: mens},
				success: function(data){
					$("form").trigger('reset');
					$("#result").html(data)
				}

				});
			});
		});*/
	</script>

	<!-- </div> -->
				


	

	<!-- Scripts 
		<script src="assets/js/jquery.min.js"></script>-->
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>