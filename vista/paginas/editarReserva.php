<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_reserva'];
            $id_usuario=$valor['id_usuario'];
            $id_paquete=$valor['id_paquete'];
            $cantidad_reservar=$valor['cantidad_reservar'];
            $fecha_catividad=$valor['fecha_actividad'];
            $inicio_actividad=$valor['inicio_actividad'];
            $fecha_fin=$valor['fecha_fin'];
            $estado=$valor['estado'];
            
            
        }
    }
?>

<body  style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">
<?php
    
    ?>
    <h1 style="margin-left: 1%; color: white;">Editar reserva</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <form action="" enctype="multipart/form-data" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="number" class="form-control" readonly id="id" name="id" value="<?= $id ?>"><br>
        </div>
    
        
        <div class="form-group">
            <label for="id_usuario" style="font-weight: bold">Id_usuario:</label>
            <input type="number" class="form-control" id="id_usuario" name="id_usuario" value="<?= $id_usuario ?>"><br>
        </div>
        <div class="form-group">
            <label for="id_paquete" style="font-weight: bold">Descripción:</label>
            <input type="number" class="form-control" id="id_paquete" name="id_paquete" value="<?= $id_paquete ?>"><br>
        </div>
        
        <div class="form-group">
            <label for="cantidad_reservar" style="font-weight: bold">cantidad de paquetes a reservar:</label>
            <input type="number" class="form-control" id="cantidad_reservar" name="cantidad_reservar" value="<?= $cantidad_reservar ?>"><br>
        </div>
    
    
        <div class="form-group">
            <label for="fecha_actividad" style="font-weight: bold">Fecha de actividad:</label>
            <input type="date" class="form-control" id="fecha_actividad" name="fecha_actividad" value="<?= $fecha_catividad ?>"><br>
        </div>
        <div class="form-group">
            <label for="inicio_actividad" style="font-weight: bold">Hora inicio actividad:</label>
            <input type="time" class="form-control" id="inicio_actividad" name="inicio_actividad" value="<?= $inicio_actividad ?>"><br>
        </div>

        <div class="form-group">
            <label for="fecha_fin" style="font-weight: bold">Fecha fin:</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?= $fecha_fin ?>"><br>
        </div>
        <div class="form-group">
            <label for="estado" style="font-weight: bold">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="1" <?= $estado == 1 ? 'selected' : '' ?>>Confirmado</option>
                <option value="0" <?= $estado == 0 ? 'selected' : '' ?>>No confirmado</option>
            </select><br>
        </div>
                
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="hidden" name="p" value="actualizarReserva">
        <a class="btn btn-primary" href="index.php?p=tablaReserva">Salir</a>
        
    </form>
    
    
</body>