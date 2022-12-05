<?php
	session_start();
	include "conexion.inc.php";
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$pantalla = $_GET["pantalla"];
	$nro_tramite = $_GET["nro_tramite"];

	$fechaActual = date('y/m/d h:i'); //para actualizar la fechafin al finalizar proceso
	$sql2 = "UPDATE flujotramite SET fechafin='".$fechaActual."' WHERE flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' ";
	mysqli_query($con, $sql2);

	include $pantalla.".grabar.inc.php";

	if (isset($_GET["Siguiente"])) //es para pasar a siguiente flujo actual y proceso siguiente
	{
		$sql = "SELECT flujo, proceso, proceso_siguiente AS procesoselect, tipo, rol, pantalla FROM flujo WHERE flujo='".$flujo."' AND proceso='".$proceso."'";
	}

	if (isset($_GET["Anterior"])) // es para volver al proceso anterios flujo actual y proceo anterior
	{
		$sql = "SELECT flujo, proceso AS procesoselect, proceso_siguiente, tipo, rol, pantalla FROM flujo WHERE flujo='".$flujo."' and proceso_siguiente='".$proceso."'";
	}

	if (isset($_GET["Si"])) //para la condicional se consulta la tabla flujo condicional si es si pasa por aceptado
	{
		$sql = "SELECT flujo, procesoSI AS procesoselect FROM flujocondicion WHERE flujo='".$flujo."' AND proceso='".$proceso."'";
	}

	if (isset($_GET["No"])) //para la condicional se consulta la tabla flujo condicional si es si pasa por aceptado
	{
		$sql="SELECT flujo, procesoNO AS procesoselect FROM flujocondicion WHERE flujo='".$flujo."' AND proceso='".$proceso."'";
	}

	$resultado = mysqli_query($con, $sql); //aqui se realiza la consulta para proceso anterior o siguiente
	$fila = mysqli_fetch_array($resultado);
	$proceso = $fila["procesoselect"];
	$tipo = $fila["tipo"];

	//aqui se crea un nuevo flujO de tramite con la hora de inicio y horafin en null
	$sql2 = "INSERT into flujotramite(flujo, proceso, nro_tramite, fechaini, usuario) ";
	$sql2.="values('".$flujo."','".$proceso."','";
	$sql2.=$nro_tramite."','".$fechaActual."','".$_SESSION["usuario"]."')";
	mysqli_query($con, $sql2);

	//para generar los parametros de llamada del get
	$parametros="?flujo=".$flujo;
	$parametros.="&proceso=".$proceso;
	$parametros.="&nro_tramite=".$nro_tramite;
	
	//se llama a la pagina
	header("Location: flujo.php".$parametros);
?>