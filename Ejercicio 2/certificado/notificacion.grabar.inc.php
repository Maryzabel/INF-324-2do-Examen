<?php
    session_start();
    include "conexion.inc.php";
    $usu = $_SESSION['usuario'];

    $sql = "UPDATE certificado SET estado ='Filalizado' WHERE usuario = '".$usu."'";
    mysqli_query($con, $sql);
?>