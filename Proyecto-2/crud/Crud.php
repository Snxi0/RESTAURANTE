<?php include("db.php") ?><!--apenas inicie la apliacion empice a conectar la base de datos-->
<?php	include("../includes/header.php")?>
<?php	include("../includes/session_cd.php")?>




<div class="container-fluid custom-bd">
    <div class="row flex-nowrap w-100">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 custom-aside">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
        
                <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start custom-ul" id="menu">
                    <li class="nav-item">
                        <a href="Crud.php" class="nav-link align-middle px-0 custom-icon">
                            <i class="fs-4 bi-house"> Inicio</i> 
                            <span class="ms-1 d-none d-sm-inline text-white "></span>
                        </a>
                    </li>
                    <li>
                        <a href="../registro/table.php"  class="nav-link px-0 align-middle custom-icon">
                            <i class="icon fs-4 bi-fork-knife veo"> Platos</i> <span class="ms-1 d-none d-sm-inline text-white"></span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"> 
                        </ul>
                    </li>
                    <li>
                        <a href="" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi bi-basket"> Ingredientes</i> <span class="ms-1 d-none d-sm-inline text-white"> </span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">-</span></a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-white">-</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle custom-icon">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">-</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4 ">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">
                        <?php echo $nombre . " " . $apellido; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu text-small shadow custom-drop">
                        <li><a class="dropdown-item custom-a" href="../usuario/perfil.php"><i class="bi bi-person"></i>
                        Profile</a></li>
                        <li><a class="dropdown-item custom-a" href="../usuario/configuracion.php"><i class="bi bi-gear"></i>
                        Settings</a></li>
                        <li>
                            <hr class="dropdown-divider custom-hr">
                        </li>
                        <li><a class="dropdown-item custom-li" href="../logIn/Login.php"><i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3 custom-bd">
            <div class="carousel">
                      <div class="slides">
                        <img src="../img/img-carrusel/2.png" alt="Imagen 1">
                        <img src="../img/img-carrusel/4.png" alt="Imagen 2">
                        <img src="../img/img-carrusel/3.png" alt="Imagen 3">
                        <img src="../img/img-carrusel/1.png" alt="Imagen 3">
                        <!-- Puedes agregar más imágenes -->
                      </div>
                    </div>


            <div class="container p-4 ">
            </div>







<?php	include("../includes/footer.php")?>

