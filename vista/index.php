
<?php
require_once("layout/header.php");
?>




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
            <img class="card-img-top" src="img/opinion.png" style="border-radius: 200px 200px 200px 200px;">
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
