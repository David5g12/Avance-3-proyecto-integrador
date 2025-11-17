

<?php
require_once('vista/layout/headerGeneral.php');
?>

<div class="agregar">
    <h1>Registro de destino</h1>
    <a class="btn btn-primary" href="index.php?p=agregarDestino">Agregar destino</a>
    <a class="btn btn-primary" href="index.php?p=detallePaquete">Salir</a>

</div>
<div class="contenedor">
    <table class= "table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ubicacion</th>
                <th scope="col">Popularidad</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Tipo</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $key => $value)
                foreach ($value as $valor):
                    echo "<tr><td>".$valor['id_destino']."</td>";
                    echo "<td style='white-space: normal; word-wrap: break-word;'>".htmlspecialchars($valor['nombre_destino'])."</td>";
                    echo "<td>".$valor['ubicacion']."</td>";
                    echo "<td>".$valor['popularidad']."</td>";
                    echo "<td style='white-space: normal; word-wrap: break-word;'>".htmlspecialchars($valor['descripcion'])."</td>";
                    echo "<td>".$valor['tipo_destino']."</td>";

                    $rutaImagen = 'vista/img/' . $valor['imagen']; // Asumiendo que 'imagen' tiene solo el nombre del archivo
            
                    // Mostrar la imagen
                    echo "<td ><img src='$rutaImagen'</td>";  // Ajusta el tamaño según necesites

                    
                    

                    echo "<td><a class='editar' href='index.php?p=editarDestino&id=".$valor['id_destino']."'>ACTUALIZAR</a>
                    <a class='delete' href='index.php?p=eliminarDestinos&id=".$valor['id_destino']."'>ELIMINAR</a></td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>