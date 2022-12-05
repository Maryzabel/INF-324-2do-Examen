<?php
    $nombre = $fila['nombre'];
    $pat = $fila['apat'];
    $mat = $fila['amat'];
    $ci = $fila['ci'];
    $foto = $fila['foto'];
    $cnac = $fila['cnac'];
    $ced = $fila['fci'];
    $leg = $fila['tib'];
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
		.cuadro1{
			text-align: left;
			line-height: 40px;
			border-collapse: separate;
			border-spacing: 0;
			width: 450px;
			border-radius: .25rem;
		}
	</style>
</head>
<body>
    <h1 align="center">OBSERVACIONES EN LA INSCRIPCIÓN</h1>
	<div class="cuadro">
        Estudiante: <b><?php echo $nombre . ' ' . $pat . ' ' . $mat ?></b><br>
        Cedula de Identidad: <b><?php echo $ci; ?></b><br>
        Ha sido observado su inscripción, debe de completar los documentos faltantes:<br>
		<div class="cuadro1">
			<ul>
                <?php
                if($foto == 'No'){
                    echo '<li>Fotografía fondo celeste claro, 3x3</li>';
                }
                if($cnac == 'No'){
                    echo '<li>Certificado de nacimiento Original</li>';
                }
                if($ced == 'No'){
                    echo '<li>Fotocopia de Cédula de Identidad (anverso/reverso)</li>';
                }
                if($leg == 'No'){
                    echo '<li>Diploma de Bachiller (FOTOCOPIA LEGALIZADA) anverso/reverso</li>';
                }
                if($foto == 'Si' && $cnac == 'Si' && $ced == 'Si' && $leg == 'Si'){
                    echo '<li>No Tiene ninguna observación</li>';
                }

                ?>
			</ul>
		</div>
  	</div>
</body>
</html>






<!--

<br>
<div style="margin-left: 25%; width: 50%; height: 190px; border: 1px solid black;">
    <div style="margin-left: 5%; margin-top: 5%;">
        Estudiante: <b><?php echo $nombre . ' ' . $pat . ' ' . $mat ?></b><br>
        Cedula de Identidad: <b><?php echo $ci; ?></b><br>
        Ha sido observado su inscripción, debe de completar los documentos faltantes:<br>
        <?php
            if($foto == 'No'){
                echo '<br>Fotografía fondo celeste claro, 3x3';
            }
            if($cnac == 'No'){
                echo '<br>Certificado de nacimiento Original';
            }
            if($ced == 'No'){
                echo '<br>Fotocopia de Cédula de Identidad (anverso/reverso)';
            }
            if($leg == 'No'){
                echo '<br>Diploma de Bachiller (FOTOCOPIA LEGALIZADA) anverso/reverso';
            }
        ?>
    </div>
</div>
<br><br>
        -->