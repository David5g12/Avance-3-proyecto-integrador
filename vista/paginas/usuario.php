
<?php
require_once('vista/layout/headerusuario.php');
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

            <?php if (in_array("Ver mi reserva", $menusPermitidos)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=verMireserva">Ver mi reserva</a>
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
    <h1>Usuarios</h1>
    <a class="btn btn-primary" href="index.php?p=usuarioInterno">Agregar Usuario</a>
</div>
<div class="contenedor">
    <table class= "table"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">telefono</th>
                <th scope="col">Rol</th>
                <th scope="col">Fecha de registro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $key => $value)
                foreach ($value as $valor):
                    echo "<tr><td>".$valor['id_usuario']."</td>";
                    echo "<td>".$valor['nombre']."</td>";
                    echo "<td>".$valor['apellido']."</td>";
                    echo "<td>".$valor['correo_electronico']."</td>";
                    echo "<td>".$valor['telefono']."</td>";
                    echo "<td>".$valor['rol']."</td>";
                    echo "<td>".$valor['fecha_registro']."</td>";
                    echo "<td><a class='editar' href='index.php?p=editar&id=".$valor['id_usuario']."'>ACTUALIZAR</a>
                    <a class='delete' href='index.php?p=eliminar&id=".$valor['id_usuario']."'>ELIMINAR</a></td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>


</div>



 

