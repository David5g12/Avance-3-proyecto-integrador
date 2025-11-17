<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require_once('vista/layout/headerGeneral.php');
?>
<div class="agregar">
    <h1>Registro de permisos</h1>
    <a class="btn btn-primary" href="index.php?p=agregarPermiso">Agregar Permiso</a>
    <a class="btn btn-primary" href="index.php?p=sacar">Salir</a>

</div>
<div class="contenedor">
    <table class= "table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Rol</th>
                <th scope="col">Nombre de menu</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $key => $value)
                foreach ($value as $valor):
                    echo "<tr><td>".$valor['id_permiso']."</td>";
                    echo "<td>".$valor['id_rol']."</td>";
                    echo "<td>".$valor['nombre_menu']."</td>";
                    

                    echo "<td><a class='editar' href='index.php?p=editarPermiso&id=".$valor['id_permiso']."'>ACTUALIZAR</a>
                    <a class='delete' href='index.php?p=eliminarPermiso&id=".$valor['id_permiso']."'>ELIMINAR</a></td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>