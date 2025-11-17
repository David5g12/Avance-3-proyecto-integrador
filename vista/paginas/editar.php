<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_usuario'];
            $nombre=$valor['nombre'];
            $apellido=$valor['apellido'];
            $correo=$valor['correo_electronico'];
            $clave=$valor['clave'];
            $telefono=$valor['telefono'];
            $rol=$valor['id_rol'];
        }
    }
?>

<body  style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">
<?php
    
    ?>
    <h1 style="margin-left: 1%; color: white;">Editar Usuario</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" class="form-control" readonly id="id" name="id" value="<?= $id ?>"><br>
        </div>
    
        <div class="form-group">
            <select name="rol" id="rol" required class="rol" style="width: 100%;">
                <option value="" disabled <?php if ($rol == "") echo 'selected'; ?>>Selecciona qué tipo de usuario pertenece</option>
                <option value="1" <?php if ($rol == 1) echo 'selected'; ?>>Administrador</option>
                <option value="2" <?php if ($rol == 2) echo 'selected'; ?>>Empleado</option>
                <option value="3" <?php if ($rol == 3) echo 'selected'; ?>>Cliente</option>
            </select>
       </div><br>
    
        <div class="form-group">
            <label for="nombre" style="font-weight: bold">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?>"><br>
        </div>
    
        <div class="form-group">
            <label for="apellido" style="font-weight: bold">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $apellido ?>"><br>
        </div>
    
        <div class="form-group">
            <label for="correo" style="font-weight: bold">Correo:</label>
            <input type="email" class="form-control" id="email" name="correo" value="<?= $correo ?>"><br>
        </div>
    
        <div class="form-group">
            <label for="clave" style="font-weight: bold">Contraseña:</label>
            <input type="password" class="form-control" id="clave" name="clave" value="<?= $clave ?>"><br>
        </div>
    
        <div class="form-group">
            <label for="telefono" style="font-weight: bold">Teléfono:</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="<?= $telefono ?>"><br>
        </div>
        
    
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="hidden" name="p" value="actualizar">
        <a class="btn btn-primary" href="index.php?p=usuario">Salir</a>
        
    </form>
    
    
</body>

    

