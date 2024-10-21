
<?php
require_once("../layout/headerp.php");
?>

<div class="center-container">
    <div class="Vaije" style="background-color: white;">
        <img src="../img/pbanner.png" style="width: 40%; border-radius: 200px 200px 200px 200px;">
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
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/paquete1.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chiapas Total</h5>
                        <p class="card-text">2x1-Desayunos Gratis-7 Noches Desde: $10,000.00</p>
                        <a href="#" class="btn btn-primary">Compra ahora</a>
                    </div>
                </div>
            </div> 
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/paquete2.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Solo pueblo magíco</h5>
                        <p class="card-text">2x1-Desayunos Gratis- 5 Noches Desde: $4,000.00</p>
                        <a href="#" class="btn btn-primary">Compra ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/paquete3.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chiapas-Naturaleza</h5>
                        <p class="card-text"> Milenaria 2x1- 4 Noches Desde: $3,100.00</p>
                        <a href="#" class="btn btn-primary">Comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="../img/paquete4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chiapas Express</h5>
                        <p class="card-text">2x1-Desayunos Gratis- 5 Noches Desde: $4,000.00</p>
                        <a href="#" class="btn btn-primary">Comprar ahora</a>
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

<?php require_once("../layout/footer.php");
?>