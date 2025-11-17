<body style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">

    <h1 style="color: white; margin-left: 1%;">Registrar paquetes</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="nombre" style="font-weight: bold">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required><br>
        </div>

        <div class="form-group">
            <label for="descripcion" style="font-weight: bold">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required><br>
        </div>

        <div class="form-group">
            <label for="precio" style="font-weight: bold">Precio:</label>
            <input type="number" class="form-control" id="precio" name="precio" required><br>
        </div>

        <div class="form-group">
            <label for="duracion" style="font-weight: bold">Duración:</label>
            <input type="text" class="form-control" id="duracion" name="duracion" required><br>
        </div>
        <div class="form-group">
            <label for="num_personas" style="font-weight: bold">Numero de personas por paquete:</label>
            <input type="number" class="form-control" id="num_personas" name="num_personas" required><br>
        </div>
        
        <div class="form-group">
            <label for="imagen" style="font-weight: bold">Seleccionar Imagen:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required><br>
        </div>

        <div class="form-group">
            <label for="id_destino" style="font-weight: bold">Id destino:</label>
            <input type="number" class="form-control" id="id_destino" name="id_destino" required><br>
        </div>




        
        <button type="submit" class="btn btn-primary">Registrar</button>
        <input type="hidden" name="p" value="guardarPaquete">
        <a class="btn btn-primary" href="index.php?p=tablapaquete">Salir</a>
    </form>

    
</body>