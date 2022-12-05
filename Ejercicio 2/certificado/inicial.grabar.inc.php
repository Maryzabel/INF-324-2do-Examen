<?php
    session_start();
    include 'conexion.inc.php';
    $usu = $_SESSION['usuario'];
    $ci = $_GET['ci'];
    $nom = $_GET['nombre'];
    $pat = $_GET['apat'];
    $mat = $_GET['amat'];
    $car = $_GET['carta'];
    $rec = $_GET['record'];
    $pen = $_GET['pensum'];
    $tra = "en tramite";

    $sql = "INSERT INTO certificado VALUES('".$ci."','".$nom."','".$pat."','".$mat."','".$usu."','".$car."','".$rec."','".$pen."','".$tra."')";
    mysqli_query($con, $sql);

?>