<body style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">

    <h1 style="color: white; margin-left: 1%;">Registrar reserva</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id_usuario" style="font-weight: bold">Id_usuario:</label>
            <input type="number" class="form-control" id="id_usuario" name="id_usuario" required><br>
        </div>

        <div class="form-group">
            <label for="id_paquete" style="font-weight: bold">id_paquete:</label>
            <input type="number" class="form-control" id="id_paquete" name="id_paquete" required><br>
        </div>

        <div class="form-group">
            <label for="cantidad_reservar" style="font-weight: bold">Cantidad de paquetes a reservar:</label>
            <input type="number" class="form-control" id="cantidad_reservar" name="cantidad_reservar" required><br>
        </div>

        <div class="form-group">
            <label for="fecha_actividad" style="font-weight: bold">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="fecha_actividad" name="fecha_actividad" required><br>
        </div>
        
        <div class="form-group">
            <label for="inicio_actividad" style="font-weight: bold">Hora de inicio:</label>
            <input type="time" class="form-control" id="inicio_actividad" name="inicio_actividad" required><br>
        </div>

        <div class="form-group">
            <label for="fecha_fin" style="font-weight: bold">fecha_fin:</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required><br>
        </div>

        <div class="form-group">
            <label for="estado" style="font-weight: bold">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1">Confirmado</option>
                <option value="0">No confirmado</option>
            </select><br>
        </div>




        <button type="submit" class="btn btn-primary">Registrar</button>
        <input type="hidden" name="p" value="guardarReserva">
        <a class="btn btn-primary" href="index.php?p=tablaReserva">Salir</a>
    </form>

    
</body>