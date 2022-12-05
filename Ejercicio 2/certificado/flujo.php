<?php
	session_start();
	$usu = $_SESSION['usuario'];
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$nro_tramite = $_GET["nro_tramite"];

	include "conexion.inc.php";

	$sql = "SELECT * FROM flujo WHERE flujo ='".$flujo."' AND proceso='".$proceso."'";
	$resultado = mysqli_query($con, $sql);
	$fila = mysqli_fetch_array($resultado);
	$pantalla = $fila["pantalla"];
	$tipo = $fila["tipo"];

	//para terminar el proceso si proceso siguiente es vacio
	if($proceso == ''){
		header("Location: bandeja_in.php");
	}

	include $pantalla.".datos.inc.php";

	$sql = "SELECT COUNT(*) AS cantidad FROM flujotramite WHERE flujo='".$flujo."' AND proceso='".$proceso."' AND nro_tramite='".$nro_tramite."'";
	$resultado2 = mysqli_query($con, $sql);
	$fila2 = mysqli_fetch_array($resultado2);
	$cantidad = $fila2["cantidad"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>certificado</title>
	<link rel="stylesheet" type="text/css" href="css/flujo.css" media="all" />
    <style>
        .boton{
			margin-left: 45%;
		}
        .ant{
            margin-left: 45%;
        }
    </style>
</head>
<body style="background-color: aqua;">
	<a href="cerrar_sesion.php"><button class="boton3">Terminar</button></a> <!--boton para terminar sesion-->

	<!-- desde aqui se llama al motor.php-->
	<form method="GET" action="motor.php">
		<?php 
			include $pantalla.".inc.php";
		?>
			<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
			<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
			<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
			<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
			<input type="hidden" value="<?php echo $nro_tramite;?>" name="nro_tramite"/>
			<br/>
		<div class="boton">
			<?php
			if ($tipo == "C")
			{
			?>
				<input type="submit" value="Si" name="Si"/>
				<input type="submit" value="No" name="No"/>
			<?php
			}
			else
			{
			?>
			<?php
			if ($cantidad < 1 && $tipo != 'F') {
			?>
				<input type="submit" value="Anterior" name="Anterior"/>
			<?php
			}
			else
			{
			?>
				<input type="submit" value="Anterior" disabled="disabled" name="Anterior"/>
			<?php
			}
			?>
			<?php
			}
			?>
			
			<?php
			if($tipo != 'C' && $tipo != 'F' && $tipo != 'nul'){
			?>
				<input type="submit" value="Siguiente" name="Siguiente"/>
			<?php
			}
			?>

			<?php
			if($tipo == 'F'){
			?>
				<input type="submit" value="Siguiente" name="Siguiente"/>
			<?php
			}
			?>

		</div>
	</form>
</body>
</html>
