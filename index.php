<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
	<head>
		<title>Cinema_Web</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
		
	</head>
	<body class="is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">
<?php 
$pagina = isset($_GET['p']) ? strtolower($_GET['p']): 'inicio';

require_once 'menu/menu.php';

require_once 'pages/'.$pagina.'.php';

require_once 'menu/footer.php';

?>
			</div>
	</body>
</html>
		
				