
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require_once('vista/layout/headerGeneral.php');
?>
<div class="agregar">
    <h1>Registro de paquetes</h1>
    <a class="btn btn-primary" href="index.php?p=agregarPaquete">Agregar paquete</a>
    <a class="btn btn-primary" href="index.php?p=detallePaquete">Salir</a>

</div>
<div class="contenedor">
    <table class= "table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Duración</th>
                <th scope="col">C.personas * paquete</th>
                <th scope="col">Id destino</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $key => $value)
                foreach ($value as $valor):
                    echo "<tr><td>".$valor['id_paquete']."</td>";
                    echo "<td>".$valor['nombre_paquete']."</td>";
                    echo "<td>".$valor['descripcion']."</td>";
                    echo "<td>".$valor['precio']."</td>";
                    echo "<td>".$valor['duracion']."</td>";
                    echo "<td>".$valor['num_personas']."</td>";
                    echo "<td>".$valor['id_destino']."</td>";
                    // Construir la ruta para la imagen en el servidor web
                    $rutaImagen = 'vista/img/' . $valor['imagen']; // Asumiendo que 'imagen' tiene solo el nombre del archivo
            
                    // Mostrar la imagen
                    echo "<td ><img src='$rutaImagen'</td>";  // Ajusta el tamaño según necesites


                    echo "<td><a class='editar' href='index.php?p=editarPaquete&id=".$valor['id_paquete']."'>ACTUALIZAR</a>
                    <a class='delete' href='index.php?p=eliminarPaquete&id=".$valor['id_paquete']."'>ELIMINAR</a></td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>