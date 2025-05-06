<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="img-container">
    </div>
    <div class="container" id="login">
        <div class="inicio">
            <h1>LOGIN</h1>
        </div>
        <div class="casillas">
            <form action="validar.php" method="post">
                <div class="input-group">
                    <input type="text" name="usuario" required>
                    <label>Usuario</label>
                </div>
                <div class="input-group">   
                    <input type="password" name="contraseña" required >
                    <label>Contraseña</label>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <?php
                    if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo "<p id= 'mensaje-error' style='color: red;'>⚠️ Usuario o contraseña incorrectos</p>";
                    }
            ?>

        </div>
    </div>
    <script>
    // Espera 3 segundos y oculta el mensaje de error
    setTimeout(function() {
        const mensaje = document.getElementById('mensaje-error');
        if (mensaje) {
            mensaje.style.display = 'none';
        }
    }, 3000); // 3000 milisegundos = 3 segundos
</script>

</body>
</html>
