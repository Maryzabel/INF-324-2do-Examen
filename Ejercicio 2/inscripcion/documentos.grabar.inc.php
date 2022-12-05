<?php
    session_start();
    $usu = $_SESSION['usuario'];
    $ci = $_SESSION['cedula'];
    $foto = $_GET['foto'];
    $cnac = $_GET['cnac'];
    $fci = $_GET['fci'];
    $ftit = $_GET['ftit'];

    $sql = "UPDATE inscripcion SET foto='$foto', cnac='$cnac', fci = '$fci', tib = '$ftit' WHERE usuario ='".$usu."'";
    $resultado = mysqli_query($con, $sql);

?>