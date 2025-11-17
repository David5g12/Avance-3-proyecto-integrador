<?php
require_once("vista/layout/headerRegistro.php");
?>

<div class="login">
    <h1>sign up</h1>
    <form action="index.php?p=registrar" name="registro" method="post" id="loginForm">
        <select name="rol" id="rol" required class="rol">
            <option value="3">Cliente</option>
            
        </select>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="email" name="correo" placeholder="Email" required>
        <input type="password" name="clave" placeholder="Contraseña" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>

        <button type="submit" name="enviar" style="background-color: rgb(9, 94, 214);">Enviar</button>
        <button type="reset" name="restablecer">restablecer</button><br><br>
        <a href="index.php?p=login" class="btn">Iniciar sesion</a>
        <a class="btn btn-primary" href="index.php">Salir</a>
        
        

    </form>
</div>

</body>
</html>
