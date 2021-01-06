<?php
include("db.php");
if(isset($_POST['guardar'])){
    $num_control = $_POST['txtnumcontrol'];
    $unidad = $_POST['txtidunidad'];
    $cal = $_POST['txtcalificacion'];
    $opcion = $_POST['txtopcion'];

    $query = "INSERT INTO calificaciones (num_control,id_unidad,calificacion,id_opcion) VALUES ('$num_control','$unidad','$cal','$opcion')";
    $resultado = mysqli_query($conn,$query);
    if(!$resultado){
        die("Query failed");
    }
    $_SESSION['message'] = 'Datos guardados correctamente';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}
?>