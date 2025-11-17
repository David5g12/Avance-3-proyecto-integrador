<?php
require_once("vista/layout/headercontacto.php")

?>

<?php
$permisos = []; // Array para almacenar los permisos obtenidos

// Supongamos que $datos es un arreglo con los permisos del usuario
foreach ($datos as $key => $value) {
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



<article>
    <div class="container">
        <h1>Contacto</h1>
        <hr  style="border: 2px solid; pad">

        <div class= "centrar">
            <div class="row g-0 d-flex flex-column align-items-start" style="background-color:white;">
                <div class="col">
                    <div class="card4 mb-4">
                        <div class="card-body" style="background-color:white;">
                            <a href=""style="color:rgb(10, 122, 4);">Contactanos</a><br>
                            <a href="" style="color:rgb(10, 122, 4);"><i class="fa-solid fa-envelope"></i>  equipo2@gmail.com</a><br>
                            <a href="" style="color:rgb(10, 122, 4);"><i class="fa-solid fa-phone"></i>  961-450-33-55</a><br>
                            <a href="" style="color:rgb(10, 122, 4);"><i class="fa-brands fa-whatsapp"></i>  961-155-49-88</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card4">
                        <div class="card-body">
                            <a href=""style="color:rgb(10, 122, 4);">siguenos en nuestras sociales</a><br>
                            <a href=""style="color:rgb(10, 122, 4);"><i class="fa-brands fa-facebook"></i> facebook</a><br>
                            <a href=""style="color:rgb(10, 122, 4);"><i class="fa-brands fa-twitter"></i> Twitter</a><br>
                            <a href=""style="color:rgb(10, 122, 4);"><i class="fa-brands fa-youtube"></i></i> youtube</a>

                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

</article>

<?php require_once("vista/layout/footer.php");
?>
