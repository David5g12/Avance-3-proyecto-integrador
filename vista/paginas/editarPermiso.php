<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_permiso'];
            $id_rol=$valor['id_rol'];
            $menu=$valor['nombre_menu'];
            
            

        }
    }
?>

<body  style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">
<?php
    
    ?>
    <h1 style="margin-left: 1%; color: white;">Editar Permiso</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <form action="" enctype="multipart/form-data" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="number" class="form-control" readonly id="id" name="id" value="<?= $id ?>"><br>
        </div>
    
        
        <div class="form-group">
            <label for="id_rol" style="font-weight: bold">Id_rol:</label>
            <input type="number" class="form-control" id="id_rol" name="id_rol" value="<?= $id_rol ?>"><br>
        </div>
        <div class="form-group">
            <label for="menu" style="font-weight: bold">Nombre de menú:</label>
            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu ?>"><br>
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="hidden" name="p" value="actualizarPermiso">
        <a class="btn btn-primary" href="index.php?p=permisos">Salir</a>
        
    </form>
    
    
</body>