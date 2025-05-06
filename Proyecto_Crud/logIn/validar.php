<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$_SESSION['usuario'] = $usuario;

include('../db.php');

if (!isset($conn)) {
    die("La conexión a la base de datos no se estableció. Verifica el include.");
}


$consulta = "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña ='$contraseña'";
$resultado = mysqli_query($conn,$consulta);


$filas = mysqli_num_rows($resultado);

if($filas){
    header("Location: ../Crud.php");
}else{
    header("location: login.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>