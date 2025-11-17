<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
require_once('vista/layout/headerRegistroreserva.php');
?>

<?php
$permisos = []; // Array para almacenar los permisos obtenidos

// Supongamos que $datos es un arreglo con los permisos del usuario
foreach ($datosPermiso as $key => $value) {
    foreach ($value as $valor) {
        // Guardar los datos en el arreglo $permisos
        $permisos[] = [
            'id_permiso' => $valor['id_permiso'],
            'id_rol' => $valor['id_rol'],
            'menu' => $valor['nombre_menu'],
        ];
    }
}

// Crear un arreglo de los nombres de los menús que el usuario tiene permiso para ver
$menusPermitidos = [];
foreach ($permisos as $permiso) {
    $menusPermitidos[] = $permiso['menu'];
}

?>

<header>

<nav>
    <img src="vista/img/logo.png" class="logo">
    <div class="subnav">

        <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
            </li>
            <?php if (in_array("Usuarios", $menusPermitidos)) : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?p=usuario">Usuarios</a>
                </li>
            <?php endif; ?>
            <?php if (in_array("Destinos", $menusPermitidos)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=destinos">Destinos</a>
                </li>
            <?php endif; ?>
            <?php if (in_array("Paquetes", $menusPermitidos)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=paquetes">Paquetes</a>
                </li>
            <?php endif; ?>
            <?php if (in_array("Contacto", $menusPermitidos)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=contacto">Contacto</a>
                </li>
            <?php endif; ?>
            <?php if (in_array("Más Opciones", $menusPermitidos)) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="masOpciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más Opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="masOpciones">
                        <?php if (in_array("Registrar Paquetes", $menusPermitidos)) : ?>
                            <li>
                                <a class="dropdown-item" href="index.php?p=detallePaquete">Registrar Paquetes</a>
                            </li>
                        <?php endif; ?>
                        <?php if (in_array("Reservas", $menusPermitidos)) : ?>
                            <li>
                                <a class="dropdown-item" href="index.php?p=detalleReserva">Reservas</a>
                            </li>
                        <?php endif; ?>
                        <?php if (in_array("Permisos", $menusPermitidos)) : ?>
                        <li>
                            <a class="dropdown-item" href="index.php?p=permisos">Permisos</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=login">Iniciar sesión</a>
            </li>
            
        </ul>
    </div>
</nav>


<div class="agregar">
    <h1>Registro de Reservas</h1>
    <a class="btn btn-primary" href="index.php?p=agregarReserva">Agregar reserva</a>
    <a class="btn btn-primary" href="index.php?p=detalleReserva">Salir</a>

</div>
<div class="contenedor">
    <table class= "table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Id_Usuario</th>
                <th scope="col">Id_paquete</th>
                <th scope="col">Cantidad a reservar</th>
                <th scope="col">Fecha de reserva</th>
                <th scope="col">Fecha de actividad</th>
                <th scope="col">Inicio de actividad</th>
                <th scope="col">Fecha fin</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $key => $value)
                foreach ($value as $valor):
                    echo "<tr><td>".$valor['id_reserva']."</td>";
                    echo "<td>".$valor['id_usuario']."</td>";
                    echo "<td>".$valor['id_paquete']."</td>";
                    echo "<td>".$valor['cantidad_reservar']."</td>";
                    echo "<td>".$valor['fecha_reserva']."</td>";
                    echo "<td>".$valor['fecha_actividad']."</td>";
                    echo "<td>".$valor['inicio_actividad']."</td>";
                    echo "<td>".$valor['fecha_fin']."</td>";
                    if ($valor['estado'] == 1) {
                        echo "<td>Confirmado</td>";
                    } else {
                        echo "<td>No confirmado</td>";
                    }
                   

                    echo "<td><a class='editar' href='index.php?p=editarReserva&id=".$valor['id_reserva']."'>ACTUALIZAR</a>
                    <a class='delete' href='index.php?p=eliminarReserva&id=".$valor['id_reserva']."'>ELIMINAR</a></td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>