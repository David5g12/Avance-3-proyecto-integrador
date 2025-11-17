<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_paquete'];
            $nombre=$valor['nombre_paquete'];
            $descripcion=$valor['descripcion'];
            $precio=$valor['precio'];
            $duracion=$valor['duracion'];
            $num_personas=$valor['num_personas'];
            $imagen=$valor['imagen'];
            $id_destino=$valor['id_destino'];
            
            

        }
    }
?>

<body  style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">
<?php
    
    ?>
    <h1 style="margin-left: 1%; color: white;">Editar paquete</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <form action="" enctype="multipart/form-data" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="number" class="form-control" readonly id="id" name="id" value="<?= $id ?>"><br>
        </div>
    
        
        <div class="form-group">
            <label for="nombre" style="font-weight: bold">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?>"><br>
        </div>
        <div class="form-group">
            <label for="descripcion" style="font-weight: bold">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $descripcion ?>"><br>
        </div>
        
        <div class="form-group">
            <label for="precio" style="font-weight: bold">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" value="<?= $precio ?>"><br>
        </div>
    
    
        <div class="form-group">
            <label for="duracion" style="font-weight: bold">Duración:</label>
            <input type="text" class="form-control" id="duracion" name="duracion" value="<?= $duracion ?>"><br>
        </div>
        <div class="form-group">
            <label for="num_personas" style="font-weight: bold">Nomero de personas por paquete:</label>
            <input type="number" class="form-control" id="num_personas" name="num_personas" value="<?= $num_personas ?>"><br>
        </div>

        <div class="form-group">
            <label for="imagen" style="font-weight: bold">Imagen:</label>
                <p>Imagen actual:</p>
                <img src="vista/img/<?= $imagen ?>" alt="Imagen actual" style="max-width: 100%; height: auto; border: 1px solid #ccc;">
        </div>
        <div class="form-group">
            <label for="imagen" style="font-weight: bold">Seleccionar Imagen:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required><br>
        </div>
        <div class="form-group">
            <label for="id_destino" style="font-weight: bold">Id destino:</label>
            <input type="number" class="form-control" id="id_destino" name="id_destino" value="<?= $id_destino ?>"><br>
        </div>
        
        <button type=ss="btn btn-primary">Guardar</button>
        <input type="hidden" name="p" value="actualizarPaquete">
        <a class="btn btn-primary" href="submit" cla"index.php?p=editarImagenPaquete">Cambiar imagen</a>
        <a class="btn btn-primary" href="index.php?p=tablapaquete">Salir</a>
        
    </form>
    
    
</body>