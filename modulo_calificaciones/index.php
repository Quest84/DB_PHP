<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="txtnumcontrol" class="form-control" placeholder="Numero de control" autofocus><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtidunidad" class="form-control" placeholder="ID Unidad" autofocus><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtcalificacion" class="form-control" placeholder="Calificacion" autofocus><br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtopcion" class="form-control" placeholder="Opcion" autofocus><br>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar"><br>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero de Control</th>
                        <th>Unidad</th>
                        <th>Calificacion</th>
                        <th>Opcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query =" SELECT *FROM calificaciones";
                        $resultado = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($resultado)){ ?>
                            <tr>
                                <td><?php echo $row['num_control'] ?></td>
                                <td><?php echo $row['id_unidad'] ?></td>
                                <td><?php echo $row['calificacion'] ?></td>
                                <td><?php echo $row['id_opcion'] ?></td>
                                <td>
                                    <a href="editar.php?num_control=<?php echo $row['num_control']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="eliminar.php?num_control=<?php echo $row['num_control']?>" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>    
    </div>
</div>
<?php include("includes/footer.php") ?>