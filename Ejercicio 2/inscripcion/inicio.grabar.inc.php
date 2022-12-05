<?php
    session_start();
    include 'conexion.inc.php';
    $ci = $_GET['ci'];
    $_SESSION['cedula'] = $ci;
    $nom = $_GET['nombre'];
    $pat = $_GET['apat'];
    $mat = $_GET['amat'];
    $gen = $_GET['genero'];
    $tel = $_GET['tel'];
    $usu = $_SESSION['usuario'];
    
    $sql = "INSERT INTO inscripcion(ci, nombre, apat, amat, genero, tel, usuario) VALUES('".$ci."','".$nom."','".$pat."','".$mat."','".$gen."','".$tel."','".$usu."')";
    mysqli_query($con, $sql);
?>
