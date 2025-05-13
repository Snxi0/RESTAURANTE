<?php

session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

include('../crud/db.php');

if (!isset($conn)) {
    die("La conexión a la base de datos no se estableció. Verifica el include.");
}

$consulta = "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña ='$contraseña'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    $_SESSION['usuario'] = $usuario; // Aquí ya es seguro guardar en la sesión
    header("Location: ../crud/crud.php");
} else {
    header("Location: login.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>
