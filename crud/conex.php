<?php
$nombresrvr = "localhost";
$usuario = "root";
$contrasena = "";
$bd = "crud_bizmerk";
//$con = mysqli_connect("localhost", "root", "", "crud_bizmerk") or die ("Error");
$con = mysqli_connect($nombresrvr, $usuario, $contrasena, $bd) or die ("Error");
?>