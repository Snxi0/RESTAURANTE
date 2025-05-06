<?php include("db.php")?><!--apenas inicie la apliacion empice a conectar la base de datos-->

<?php	include("./includes/header.php")?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">
            
        <?php  if(isset($_SESSION['message'])) {?>
            <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset();//limpia los datos que tengo en secion
        }?> <!-- verificar que existen los datos guardados y mostrar mensaj-->

            <div class="card card-body bg-black">
                <form action="save_task.php" method="POST">
                    <div class="form-group mt-3 " >
                        <label>Titulo de registro</label>
                        <input type="text" name="title" class="form-control" autofocus>
                    </div>
                    <div class="form-group mt-3">
                        <label>Descripcion de registro</label>
                        <textarea name="description" rows="2" class="form-control" ></textarea>
                    </div>
                    <input type="submit" class="btn btn-custom w-100 mt-3" name="save_task" value="Enviar">
                </form>
            </div>
        </div>

        <div class="col md-8 ">
            <table class="table table-bordered custom-table">
                <thead>
                    <tr >
                        <th>TITULO</th> 
                        <th>DESCRIPCION</th>
                        <th>FECHA DE CREACION</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM tarea";
                    $resultas = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($resultas)){?> <tr>
                        <td> <?php echo $row['titulo'] ?></td>
                        <td> <?php echo $row['descripcion'] ?></td>
                        <td> <?php echo $row['crearted_at'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker "></i>
                            </a>
                            <a href="delete_task.php?id=<?php echo $row['id']?>"class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>

                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php	include("./includes/footer.php")?>

