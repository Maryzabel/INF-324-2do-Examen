<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Non-Responsive Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cuadro.css">
</head>
<body>
    <br>
    <h1 align="center">REGISTRO DE ESTUDIANTES NUEVOS</h1>
    <table>
		<tbody>
			<tr>
				<td>Cedula de identidad:</td>
				<td><input type="text" name="ci" style="height: 25px; width: 250px;"> </td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" style="height: 25px; width: 250px;"> </td>
			</tr>
			<tr>
				<td>Apellido Paterno:</td>
				<td><input type="text" name="apat" style="height: 25px; width: 250px;"> </td>
			</tr>
			<tr>
				<td>Apellido Materno:</td>
				<td><input type="text" name="amat" style="height: 25px; width: 250px;"> </td>
			</tr>
			<tr>
				<td>Genero:</td>
				<td>
					<select name="genero" style="height: 25px; width: 250px;">    
						<option value="Hombre">Hombre</option>    
						<option value="Mujer">Mujer</option>    
					</select><br>   
				</td>
			</tr>
			<tr>
				<td>Telefono:</td>
				<td><input type="text" name="tel" style="height: 25px; width: 250px;"> </td>
			</tr>
		</tbody>
	  </table>
</body>
</html>