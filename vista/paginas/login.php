
<?php
// Verificar si hay un mensaje de la sesión (de la autenticación)
if (isset($mensaje) && $mensaje != "") {
    echo "<p style='color: red;'>$mensaje</p>"; // Mostrar mensaje en rojo (puedes ajustar el color o estilo)
}
?>

<?php
require_once("vista/layout/headerRegistro.php");
?>

<div class="login">
    <h1>Log in.</h1>
    <form action="index.php?p=autenticar" name="login" method="post" id="loginForm">
        <input type="email" name="correo" placeholder="Email" required>
        <input type="password" name="clave" placeholder="Contraseña" required>
        
        <button type="submit" name="enviar" style="background-color: rgb(9, 94, 214);">Enviar</button>
        <button type="reset" name="restablecer">restablecer</button><br><br>
        <a href="index.php?p=registro" class="btn">Registrarse</a>
        <a class="btn btn-primary" href="index.php">Salir</a>
    </form>
</div>

</body>
</html>