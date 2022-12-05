<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/extra.css">

</head>
<body>

<a href="cerrar_sesion.php"><button class="boton3">Terminar</button></a>

<?php
    include 'conexion.inc.php';
    session_start();
    $usu = $_SESSION['usuario']; 

    echo "<div class='titulo'><h1>Bienvenido: " . $usu."</h1></div><br>";

    $sql = "SELECT * FROM flujotramite WHERE usuario='".$usu."' AND fechafin is null AND proceso != ''";
    $resultado = mysqli_query($con, $sql);
?>
    
    <a href="nuevo.php?usu=<?php echo $usu; ?>"><button class="boton3">Nuevo</button></a>

    <div class="container">
	<table>
		<thead>
			<tr>
				<th>Nro. Tramite</th>
				<th>Flujo</th>
				<th>Proceso</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
				<th>Operacion</th>
			</tr>
		</thead>
        <tbody>
    <?php
    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['nro_tramite']."</td>";
        echo "<td>".$fila['Flujo']."</td>";
        echo "<td>".$fila['proceso']."</td>";
        echo "<td>".$fila['fechaini']."</td>";
        echo "<td>".$fila['fechafin']."</td>";
        echo "<td><a href='flujo.php?flujo=".$fila['Flujo']."&proceso=".$fila['proceso']."&nro_tramite=".$fila['nro_tramite']."'><button class='boton2'>Continuar</button></a></td>";
        echo "</tr>";
    }
?>
            </tbody>
        </table>
    </div>

</body>
</html>








