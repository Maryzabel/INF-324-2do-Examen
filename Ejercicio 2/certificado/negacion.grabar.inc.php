<?php
    session_start();
    include "conexion.inc.php";
    $usu = $_SESSION['usuario'];

    $sql = "UPDATE certificado SET estado ='Observado' WHERE ci = '".$usu."'";
    mysqli_query($con, $sql);
?>