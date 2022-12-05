<?php
    session_start();
    $usu = $_SESSION['usuario'];
    $grupo = $_GET['grupo'];
    
    $sql = "UPDATE inscripcion SET grupo='$grupo' WHERE usuario ='".$usu."'";
    $resultado = mysqli_query($con, $sql);

?>