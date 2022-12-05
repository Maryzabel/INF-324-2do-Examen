<?php
    include "conexion.inc.php";
    
    $flujo = $_GET['flujo'];
    $proceso = $_GET['proceso'];

    $sql = "select * from flujo where flujo = '$flujo' and proceso = '$proceso'";
    $resultado = mysqli_query($con, $sql);
    $fila = mysqli_fetch_array($resultado);
    $pantalla = $fila['pantalla'];
    $pantalla.=".inc.php";

    $pantallalogica = $fila['pantalla'];
    $pantallalogica .= ".main.inc.php";
    $procesoanterior = $proceso;
    $proceso = $fila['proc_sig'];
    $tipo = $fila['tipo'];

    if($tipo != "F"){
    include $pantallalogica;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <style>
        form{
            margin-left: 50px;
        }
        .ant{
            margin-left: 45%;
        }
    </style>
</head>
<body>
    <a href="cerrar_sesion.php"><button class="boton3">Terminar</button></a>
    <br/>
    <div>
    <form action="motor.php" method="GET">
        <input type="hidden" name="flujo" value="<?php echo $flujo; ?>"/>
        <input type="hidden" name="proceso" value="<?php echo $proceso; ?>"/>
        <input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior; ?>"/>
        <input type="hidden" name="tipo" value="<?php echo $tipo; ?>"/>
        <?php
            include $pantalla;
            if($tipo == 'C'){
        ?>
            <div class="ant">
            <input type="submit" name="No" value="No"/>
            <input type="submit" name="Si" value="Si"/>
            </div>
        <?php
        } else 
        if($tipo != 'F' && $tipo != 'C' && $tipo !== 'I')
        {
        ?>
            <div class="ant">
            <input type="submit" name="Anterior" value="Anterior"/>
            <input type="submit" name="Siguiente" value="Siguiente"/>
            </div>
        <?php
        }
        if($tipo == 'F'){
        ?>
            <div class="ant">
            <input type="submit" name="Anterior" value="Anterior"/>
            </div>
        <?php
        }
        if($tipo == 'I'){
        ?>
            <div class="ant">
            <input type="submit" name="Siguiente" value="Siguiente"/>
            </div>
        <?php
        }
        ?>
    </form>
    </div>
</body>
</html>