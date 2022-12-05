<?php
    $nombre = $fila['nombre'];
    $pat = $fila['apat'];
    $mat = $fila['amat'];
    $ci = $fila['ci'];
    $grupo = $fila['grupo'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Non-Responsive Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/style.css">-->
	<style>
		.cuadro{
			text-align: left;
			line-height: 40px;
			border-collapse: separate;
			border-spacing: 0;
			border: 2px solid #ed1c1c;
			width: 520px;
			margin: 50px auto;
			border-radius: .25rem;
		}
	</style>
</head>
<body>
    <h1 align="center">NOTA DE INSCRIPCIÓN</h1>
	<div class="cuadro">
        Estudiante: <b><?php echo $nombre . ' ' . $pat . ' ' . $mat ?></b><br>
        Cedula de Identidad: <b><?php echo $ci; ?></b><br>
        Ha sido correctamente registrado y se le ha asignado el <b><?php echo $grupo; ?></b>
  	</div>
</body>
</html>
