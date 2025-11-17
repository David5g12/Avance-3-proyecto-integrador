<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_destino'];
            $nombre=$valor['nombre_destino'];
            $ubicacion=$valor['ubicacion'];
            $popularidad=$valor['popularidad'];
            $descripcion=$valor['descripcion'];
            $tipo=$valor['tipo_destino'];
            $imagen=$valor['imagen'];

        }
    }
?>

<body  style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">
<?php
    
    ?>
    <h1 style="margin-left: 1%; color: white;">Editar destinos</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="number" class="form-control" readonly id="id" name="id" value="<?= $id ?>"><br>
        </div>
    
        
        <div class="form-group">
            <label for="nombre" style="font-weight: bold">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?>"><br>
        </div>
        <div class="form-group">
            <label for="ubicacion" style="font-weight: bold">ubicacion:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?= $ubicacion ?>"><br>
        </div>
        
        <div class="form-group">
            <label for="popularidad" style="font-weight: bold">Popularidad:</label>
            <input type="number" class="form-control" id="popularidad" name="popularidad" value="<?= $popularidad ?>"><br>
        </div>

        <div class="form-group">
            <label for="descripcion" style="font-weight: bold">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $descripcion ?>"><br>
        </div>
    
        <div class="form-group">
            <label for="tipo" style="font-weight: bold">tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="<?= $tipo ?>"><br>
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
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="hidden" name="p" value="actualizarDestino">
        <a class="btn btn-primary" href="index.php?p=tabladestino">Salir</a>
        
    </form>
    
    
</body>
