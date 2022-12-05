<?php
    session_start();
    include 'conexion.inc.php';
    $usu = $_SESSION['usuario'];

    $sql = "SELECT * FROM inscripcion WHERE ci ='".$usu."'";
    $resultado = mysqli_query($con, $sql);
	$fila = mysqli_fetch_array($resultado);
?>