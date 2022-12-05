<?php
	include "conexion.inc.php";
	$usuario = $_POST['usuario'];
	$pasword = $_POST['pasword'];

	$sql = "INSERT INTO usuario (usuario, pasword,id_rol) VALUES('".$usuario."','".$pasword."',1)";
	$resultado = mysqli_query($con, $sql);
    header("Location: index.html")
?>