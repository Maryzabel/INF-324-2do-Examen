<?php
    $fotoss = $fila['foto'];
	$cnac = $fila['cnac'];
	$fci = $fila['fci'];
	$tib = $fila['tib'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Non-Responsive Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cuadro.css">
</head>
<body>
    <br><br>
    <h1 align="center">DOCUMENTOS PRESENTADOS POR EL ESTUDIANTE</h1>
	<table>
		<tbody>
			<tr>
				<td>Fotografía fondo celeste claro, 3x3:</td>
				<td><input style="height: 25px; width: 35px;" type="text" name="" value="<?php echo $fotoss; ?>"/></td>
			</tr>
			<tr>
				<td>Certificado de nacimiento Original:</td>
                <td><input style="height: 25px; width: 35px;" type="text" name="" value="<?php echo $cnac; ?>"/></td>
			</tr>
			<tr>
				<td>Fotocopia de Cédula de Identidad (anverso/reverso):</td>
				<td><input style="height: 25px; width: 35px;" type="text" name="" value="<?php echo $fci;?>"/></td>
			</tr>
			<tr>
				<td>Diploma de Bachiller (FOTOCOPIA LEGALIZADA) anverso/reverso:</td>
                <td><input style="height: 25px; width: 35px;" type="text" name="" value="<?php echo $tib;?>"/></td>
			</tr>
		</tbody>
	</table>
    <h1 align="center">¿El estudiante cumple con todos los requisitos?</h1>
<br><br>
</body>
</html>