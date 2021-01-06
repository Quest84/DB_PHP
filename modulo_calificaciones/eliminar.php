<?php
    include("db.php");
    if(isset($_GET['num_control'])){
        $num_control = $_GET['num_control'];
        $query = "DELETE FROM calificaciones WHERE num_control=$num_control";
        $resultado = mysqli_query($conn,$query);
        if(!$resultado){
            die("Query Failed");
        }
        $_SESSION['message']='Calificación removida exitosamente';
        $_SESSION['message_type'] = 'danger';
        header('Location: index.php');
    }
?>