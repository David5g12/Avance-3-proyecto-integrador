<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/destinosController.php");
require_once("controlador/paquetesController.php");
require_once("controlador/registrosController.php");
require_once("controlador/contactoController.php");
require_once("controlador/loginController.php");
require_once("controlador/usuariosController.php");
require_once("controlador/detallepaquetesController.php");
require_once("controlador/detallesreservaController.php");
require_once("controlador/reservaController.php");
require_once("controlador/permisosController.php");



if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('destinosController',$metodo)):
        destinosController::{$metodo}();
    endif;
    if(method_exists('paquetesController',$metodo)):
        paquetesController::{$metodo}();
    endif;
    if(method_exists('registrosController',$metodo)):
        $controller = new registrosController();
        $controller->{$metodo}();
    endif;
    if(method_exists('contactoController',$metodo)):
        contactoController::{$metodo}();
    endif;
    if(method_exists('loginController',$metodo)):
        $controller = new loginController();
        $controller->{$metodo}();
    endif;
    if(method_exists('usuariosController',$metodo)):
        usuariosController::{$metodo}();
    endif;
    if(method_exists('detallepaquetesController',$metodo)):
        detallepaquetesController::{$metodo}();
    endif;
    if(method_exists('detallesreservaController',$metodo)):
        detallesreservaController::{$metodo}();
    endif;
    if(method_exists('reservaController',$metodo)):
        reservaController::{$metodo}();
    endif;
    if(method_exists('permisosController',$metodo)):
        permisosController::{$metodo}();
    endif;







else:
    if(isset($_GET['i'])):
        $metodo =  $_GET['i'];
        if(method_exists('indexController',$metodo)):
            indexController::{$metodo}();
        endif;
    else:
    indexController::index();
    endif;
endif;
?>
