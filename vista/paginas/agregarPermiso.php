
<body style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">

    <h1 style="color: white; margin-left: 1%;">Registrar permiso</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id_rol" style="font-weight: bold">Id_rol:</label>
            <input type="number" class="form-control" id="id_rol" name="id_rol" required><br>
        </div>

        <div class="form-group">
            <label for="menu" style="font-weight: bold">Nombre del menu:</label>
            <input type="text" class="form-control" id="menu" name="menu" required><br>
        </div>


        
        <button type="submit" class="btn btn-primary">Registrar</button>
        <input type="hidden" name="p" value="guardarPermiso">
        <a class="btn btn-primary" href="index.php?p=permisos">Salir</a>
    </form>

    
</body>