<?php
	$usuario = $_POST['usuario'];
	$pasword = $_POST['pasword'];

    try{
		$base = new PDO('mysql:host=localhost; dbname=certificado', 'root', '');
		$base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		$base -> exec("SET CHARACTER SET utf8");
		$sql = "select * from usuario where usuario = :uso and pasword = :pas";
		$resultado = $base -> prepare($sql);
		$resultado -> execute(array(":uso" => $usuario, ":pas" => $pasword));
		
        $numero_registro = $resultado -> rowCount();
        $registro = $resultado -> fetch(PDO::FETCH_ASSOC);
		if($numero_registro == 1 and $registro['id_rol'] == 1){ //para ingreso como alumno
			session_start();
            $_SESSION["usuario"] = $usuario;
			header("location:bandeja_in.php");
		}else
		if($numero_registro == 1 and $registro['id_rol'] == 2){ //para ingreso como kardex
			session_start();
			$_SESSION["usuario"] = $usuario;
			header("location:bandeja_in.php");
		}else 
		if($numero_registro == 1 and $registro['id_rol'] == 3){ //para ingreso como kardex
			session_start();
			$_SESSION["usuario"] = $usuario;
			header("location:bandeja_in.php");
		} else {
			header("location:index.html");
		}
		$resultado -> closeCursor();

	} CATCH(Exception $e){
		die('Error: ' . $e -> GetMessage());
	} 

?>