<?php
require_once('config.php');
require_once('controlador/indexController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('IndexController',$metodo)):
        IndexController::{$metodo}();
    endif;
else:
    IndexController::index();
endif;
?>