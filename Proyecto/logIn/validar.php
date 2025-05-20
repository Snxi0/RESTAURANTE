<?php
include('../crud/db.php');

$cedula = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$consulta = "SELECT * FROM usuarios WHERE cedula ='$cedula' and contraseña ='$contraseña'";
$resultado = mysqli_query($conn, $consulta);

if (mysqli_num_rows($resultado) > 0) { //Cuenta cuántos resultados devolvió la base de datos después de ejecutar la consulta. Si es mayor que 0, significa que el usuario y la contraseña están correctos.
    $_SESSION['cedula'] = $cedula;
    header("Location: ../crud/inicio.php");
    exit();
} else {
    $error = "⚠️ Usuario o contraseña incorrectos";
}
mysqli_free_result($resultado);
?>
