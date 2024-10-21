
<?php
require_once("../layout/headerd.php");
?>

<div class="center-container">
    
    <div class="Vaije" style="background-color: white;">
        <h1 style="font-size: 300%;"><b>ESTO ES CHIAPAS</b></h1>
        <p style="font-size: 100%;">Rico de biodiversidad.</p> 
    </div>
    <div class="rosa">
     <img src="../img/destino1.png" style="width: 50%; border-radius: 200px 200px 200px 200px;">

    </div>
</div>

</header>

<article>
    <div id="beneficios">
        <div class="row">
            <div class="bviaje">
                <h1 style="font-size: 350%;"><b>Las ciudades más populares de Chiapas.</b></h1>
                <p style="font-size: 150%;"> Elige alguno de nuestros destinos.</p>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/darbolnavidad.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tuxtla Gutiérrez.</h5>
                        <p class="card-text">¡Explora Tuxtla Gutiérrez! Este destino te espera con su zoológico, sus sitios turísticos, sus parques y mucho más.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/dsancristobal.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">San Cristóbal de las Casas</h5>
                        <p class="card-text">Contempla la belleza de la ciudad colonial de San Cristóbal de las Casas en las tierras altas de Chiapas. </p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/dchiapas.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Palenque</h5>
                        <p class="card-text">Palenque es un destino famoso de Chiapas y cuenta con algunos de los ejemplares más impresionantes de la arquitectura maya en México.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/dchiapadecorzo.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chiapa de Corzo</h5>
                        <p class="card-text">El centro histórico de Chiapa de Corzo es el corazón de su encanto, una impresionante estructura de ladrillo construida en 1562 que simboliza la ciudad.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ahora">
        <div class="comienza">
            <h1>Comienza ahora</h1>
            <p>¡Únete a la aventura hoy!</p>
            <div>
                <form>
                    <a href="https://mail.google.com/" class="btn btn-primary" style="background-color: #E6FFF5; color: black;"><u><i class="fa-brands fa-google"></i>  Inicia sesión con Google</u></a>
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
</article>


<?php require_once("../layout/footer.php");
?>
