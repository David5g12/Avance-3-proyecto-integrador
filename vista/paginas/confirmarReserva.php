
<?php
$id_paquete;

session_start();  // Asegúrate de que la sesión esté iniciada
$id_usuario = null;  // Inicializa la variable (puede ser null o cualquier valor por defecto)
// Verifica si hay un usuario en sesión
if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];  // Asigna el valor de la sesión a la variable
}

?>

<body style="background:radial-gradient(ellipse at 0% 100%, rgba(104, 128, 138, 0.4) 10%, rgba(138, 114, 76, 0) 40%),
              linear-gradient(to bottom, rgba(57, 173, 219, 0.25) 0%, rgba(42, 60, 87, 0.4) 100%),
              linear-gradient(135deg, #670d10 0%, #092756 100%);">

    <h1 style="color: white; margin-left: 1%;">Confirma tu reserva</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <form action="" class="editar p-4 bg-light rounded shadow-sm" style="max-width: 500px; margin: auto;">

        <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?= $id_usuario ?>"><br>
        <input type="hidden" class="form-control" id="id_paquete" name="id_paquete" value="<?= $id_paquete ?>"><br>

        <div class="form-group">
            <label for="cantidad_reservar" style="font-weight: bold">Cantidad de paquetes a reservar:</label>
            <input type="number" class="form-control" id="cantidad_reservar" name="cantidad_reservar" required><br>
        </div>

        <input type="hidden" id="estado" name="estado" value="0"><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="hidden" name="p" value="guardarReserva">
        <a class="btn btn-primary" href="index.php?p=paquetes">Salir</a>
    </form>

    
</body>