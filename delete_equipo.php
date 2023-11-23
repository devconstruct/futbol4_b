<?php 
    session_start();
    include_once('./include/dbconn.php');

    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();

        try{
            $sql = "DELETE FROM Equipo WHERE id_equipo = ' ".$_GET['id']. " '  ";

            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Equipo eliminado correctamente ' : 'No se puede eliminar el equipo, revisa los datos';
        } catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
        $database -> close();
    }else{
        $_SESSION['message'] = 'Completa el formulario';
    }

    header('location: equipo.php');

?>