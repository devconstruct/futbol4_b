<?php 
    session_start();
    include_once('include/dbconn.php');

    if(isset($_POST['editar'])){
        $database = new Connection();
        $db = $database->open();

        try{
            $id = $_GET['id'];
            $nombres = $_POST['nombres'];

            $sql = "UPDATE Equipo SET nombre_equipo = '$nombres' WHERE id_equipo =  '$id' ";

            $_SESSION['message'] = ( $db->exec($sql)) ? 'Equipo actualizado correctamente' : 'No se pudo actualizar el equipo';
        }catch(PDOException $e) {
            $_SESSION['message'] = $e->getPrevious();
        }
        $database->close();
    }else{
        $_SESSION['message'] = 'Completa correctamente el formulario';
    }
    header('location: equipo.php');
?>