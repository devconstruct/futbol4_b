<?php
session_start();
include_once('./include/dbconn.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		
		$stmt = $db->prepare("INSERT INTO Equipo (nombre_equipo) VALUES (:nombre)");
		
		$_SESSION['message'] = ( $stmt->execute(array(':nombre' => $_POST['nombre'])) ) ? 'equipo guardado correctamente' : 'Algo salió mal. No se puede agregar ';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	
	$database->close();
}

else{
	$_SESSION['message'] = 'Por favor escribe algun nombre del equipo';
}

header('location: equipo.php');
	
?>