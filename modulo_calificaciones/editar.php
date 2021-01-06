<?php
include("db.php");
$nu='';
$uni='';
$calif='';
$opc='';
if(isset($_GET['num_control'])){
    $n = $_GET['num_control'];
    $query = "SELECT * FROM calificaciones WHERE num_control=$n";
    $r = mysqli_query($conn, $query);
    if (mysqli_num_rows($r)==1){
        $row = mysqli_fetch_array($r);
        $nu = $row['num_control'];
        $uni = $row['id_unidad'];
        $calif = $row['calificacion'];
        $opc = $row['id_opcion'];
    }
}

if (isset($_POST['Actualizar'])) {
    $nu = $_GET['num_control'];
    $uni = $_POST['id_unidad'];
    $calif = $_POST['calificacion'];
    $opc = $_POST['id_opcion'];
    $query = "UPDATE calificaciones set num_control = '$nu', id_unidad = '$uni', calificacion ='$calif', id_opcion='$opc' WHERE num_control=$nu";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Registro actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }
  
?>
<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?num_control=<?php echo $_GET['num_control']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="txtnumcontrol" value="<?php echo $nu;?>" class="form-control" placeholder="Actualizar numero de control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtidunidad" value="<?php echo $uni;?>" class="form-control" placeholder="Actualizar unidad">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtcalificacion" value="<?php echo $calif;?>" class="form-control" placeholder="Actualizar calificacion">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtopcion" value="<?php echo $opc;?>" class="form-control" placeholder="Actualizar opcion">
                    </div>
                    <button class="btn btn-success" name="Actualizar"> 
                            Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>