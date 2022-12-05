<?php
	include "conexion.inc.php";
	$usuario = $_GET['usu'];
	$fechaini = date('y/m/d h:i');
	$num = 0;

	//cuenta agrupa los numeros de tramites iguales
	$sql = "SELECT nro_tramite FROM flujotramite GROUP BY nro_tramite";
	$resultado = mysqli_query($con, $sql);

	//cuenta la cantidad de numeros de tramites
	while($fila = mysqli_fetch_array($resultado)){
		$num = $num + 1;
	}
	$num = $num + 1;

	//aqui se crea un nuevo flujO de tramite con la hora de inicio y horafin en null
	$sql2 = "INSERT into flujotramite(flujo, proceso, nro_tramite, fechaini, usuario) ";
	$sql2.="values('F1','P1','";
	$sql2.=$num."','".$fechaini."','".$usuario."')";
	mysqli_query($con, $sql2);

	// retorna a la bandeja de entrada
	header("Location: bandeja_in.php");
	
?>