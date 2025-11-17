
<?php
require_once("layout/header.php");
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



<div class="center-container">
    <div class="Vaije">
        <p style="font-size: 100%;">Creando recuerdos duraderos</p>
        <h1 style="font-size: 350%;"><b>Viaja con nosotros</b></h1>
        <div  class="Unete">
            <p style="font-size: 100%;"><u>¡Únete a la expedición!</u></p>
        </div> 
    </div>
</div>
</header>

<article>
    <div class="mision">
        <div class="conecta">
            <h1 style="color: rgb(204, 81, 4);">Nuestra misión</h1>
            <h1 style="color: rgb(18, 112, 130); font-size: 400%;" ><b>Conectamos a los aventureros con experiencias que inspiran y transforman.</b></h1>
        </div>
    </div>
    <div id="beneficios">
        <div class="row">
            <div class="bviaje">
                <h1 style="font-size: 350%;"><b>Beneficios de viaje.</b></h1>
                <p style="font-size: 150%;">¿Por qué reservar con nosotros?</p>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Expertos locales</h5>
                        <p class="card-text">Nuestros guías comparten conocimientos privilegiados para una experiencia auténtica.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Itinerarios personalizados</h5>
                        <p class="card-text">Adaptamos los viajes a sus preferencias únicas.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Viajes -Eco</h5>
                        <p class="card-text">Adoptamos prácticas sostenibles para proteger nuestro planeta.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asistencia las 24 horas</h5>
                        <p class="card-text">Nuestro equipo de soporte está aquí para usted, de día o de noche.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id ="viajar">
        <div class="card_opinion" style="width: 18rem;">
            <img class="card-img-top" src="vista/img/opinion.png" style="border-radius: 200px 200px 200px 200px;">
            <div class="card-body">
                <h5 class="card-title">Opiniones</h5>
                <p style="font-size: 200%;">¡Viajar con Destinos Mágicos de Chiapas fue la mejor decisión que tomé!</p>
                <p>Mario Rafael</p>
            </div>
        </div>
    </div>
    <div id ="form">
        <div class="formulario">
            <h1 style="font-size: 300%;"><b>Mantente conectad@</b></h1>
            <p style="font-size: 120%;">Regístrese para recibir información sobre viajes y ofertas especiales.</p>
            <div class="form-group ">
                <div class="d-flex align-items-center">
                    <input type="email" class="form-control mx-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" style="width: 60%;">
                    <button type="submit" class="btn btn-primary" style="width: 40%;background-color: rgb(218, 111, 18);">Registrarse</button>
                </div> 
            </div>
        </div>
    </div>
</article>

<?php require_once("layout/footer.php");
?>
