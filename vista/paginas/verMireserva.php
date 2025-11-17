
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

<?php
require_once('vista/layout/headerClientes.php');
?>

<br>
<div class="contenedor">
    <h1 style="text-align: center;">Tús reservas</h1>
    <h5 style="text-align: center;">Por favor espere su confirmación</h5>
    <hr  style="border: 2px solid;">
</div>
<article>

    <div class="targetas">
        <?php
        $contador = 0;
        foreach ($datosCliente as $key => $value) {
            foreach ($value as $valor) {
                if ($contador % 4 == 0) {
                    // Abrir una nueva fila cada 4 tarjetas
                    if ($contador > 0) echo '</div>'; // Cerrar la fila previa
                    echo '<div class="row">';
                }
                ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <!-- Imagen centrada y tamaño ajustado -->
                        <img src="vista/img/<?= $valor['imagen'] ?>" 
                            class="card-img-top mx-auto d-block" 
                            style="width: 100%; height: 250px; object-fit: cover;" 
                            alt="Imagen Paquete">
                        <div class="card-body">
                            <h5 class="card-title">Reserva #<?= $valor['id_reserva'] ?></h5>
                            <p><strong>Nombre:</strong> <?= $valor['nombre'] . ' ' . $valor['apellido'] ?></p>
                            <p><strong>Teléfono:</strong> <?= $valor['telefono'] ?></p>
                            <p><strong>Paquete:</strong> <?= $valor['nombre_paquete'] ?></p>
                            <p><strong>Precio:</strong> $<?= number_format($valor['precio'], 2, ',', '.') ?></p>
                            <p><strong>Cantidad de Paquete:</strong> <?= $valor['cantidad_reservar'] ?></p>
                            <p><strong>Total de Personas:</strong> <?= $valor['cantidad_reservar'] * $valor['num_personas'] ?></p>
                            <p><strong>Total a Pagar:</strong> $<?= number_format($valor['precio'] * $valor['cantidad_reservar'], 2, ',', '.') ?></p>
                            <p><strong>Fecha Reservada:</strong> <?= $valor['fecha_reserva'] ?></p>
                            <p><strong>Fecha Inicio:</strong> <?= $valor['fecha_actividad'] ?></p>
                            <p><strong>Hora de inicio:</strong> <?= date("g:i A", strtotime($valor['inicio_actividad'])) ?></p>
                            <p><strong>Fecha Fin:</strong> <?= $valor['fecha_fin'] ?></p>
                            <p><strong>Estado:</strong> <?= $valor['estado'] == 1 ? 'Confirmado' : 'No confirmado' ?></p>
                        </div>
                    </div>
                </div>
                <?php
                $contador++;
            }
        }
        if ($contador > 0) echo '</div>'; // Cerrar la última fila
        ?>
    </div>

  
        




</article>
<?php   
require_once('vista/layout/footer.php');
?>


