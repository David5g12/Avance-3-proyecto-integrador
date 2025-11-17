
<?php
require_once("vista/layout/headerp.php");
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


<?php
$paquetes = []; // Array para almacenar los datos obtenidos

foreach ($datos as $key => $value) {
    foreach ($value as $valor) {
        // Guardar los datos en el arreglo $paquetes
        $paquetes[] = [
            'id_paquete' => $valor['id_paquete'],
            'nombre' => $valor['nombre_paquete'],
            'descripcion' => $valor['descripcion'],
            'precio' => $valor['precio'],
            'duracion' => $valor['duracion'],
            'id_destino' => $valor['id_destino'],
            'imagen' => $valor['imagen'] // No es necesario construir la ruta aquí si solo quieres los valores
        ];
    }
}

?>


<div class="center-container">
    <div class="Vaije" style="background-color: white;">
        <img src="vista/img/pbanner.png" style="width: 40%; border-radius: 200px 200px 200px 200px;">
        <h1 style="font-size: 300%;"><b>¡2x1, Desayunos</b></h1>
        <p style="font-size: 100%;">Ven y diviértete.</p> 
    </div>
</div>
</header>

<article>
    <div id="beneficios">
        <div class="row">
            <div class="bviaje">
                <h1 style="font-size: 350%;text-align: center;"><b>Ofertas.</b></h1>
                <p style="font-size: 100%;text-align: center;">Pasos simples para embarcarte en tu próxima aventura.</p>
            </div>

            <?php foreach ($paquetes as $paquete): ?>
        
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="vista/img/<?php echo $paquete['imagen']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $paquete['nombre']; ?></h5>
                        <p class="card-text"><?php echo $paquete['descripcion']; ?> <?php echo $paquete['duracion']; ?>
                        MXN$<?php echo $paquete['precio']; ?>
                        </p>
                        <a class="btn btn-primary" href="index.php?p=confirmarReserva&id_paquete=<?php echo $paquete['id_paquete']; ?>">Comprar paquete</a>

                    </div>
                </div>
            </div> 
           <?php endforeach; ?>
        </div>
    </div>
    <div id="ahora">
        <div class="comienza">
            <h1>Comienza ahora</h1>
            <p>¡Únete a la aventura hoy!</p>
            <div>
                <form>
                    <a href="https://mail.google.com/" class="btn btn-primary" style="background-color:#E6FFF5; color: black;"><u><i class="fa-brands fa-google"></i>  Inicia sesión con Google</u></a>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ver contraseña</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: rgb(93, 177, 81);;">Iniciar sesión con correo electrónico</button>
                </form>
            </div>
        </div>
    </div>

    <div id="unete">
        <div class="comunidad">
                
            <h1 style="font-size: 280%;"><b>Únete a nuestra comunidad de aventura.</b></h1>
             <p style="font-size: 150%;">Ven y diviértete.</p>
                               
        </div>
        <div class="planes">
            <div class="planificacion">
                <h1 style="font-size: 150%;"><b>planificaciones de aventuras</b></h1>
                <p>Obtén conocimientos de primera mano de los lugareños para mejorar tu experiencia de viaje.</p>
            </div>
            <div class="locales">
                <h1 style="font-size: 150%;"><b>Perspectivas locales</b></h1>
                <p>Obtén conocimientos de primera mano de los lugareños para mejorar tu experiencia de viaje.</p>
            </div>
            <div class="seguridad">
                <h1 style="font-size: 150%;"><b>Perspectivas locales</b></h1>
                <p>Tu seguridad es nuestra prioridad; proporcionamos todas las precauciones necesarias.</p>

            </div>
        </div>
    </div>
</article>

<?php require_once("vista/layout/footer.php");
?>