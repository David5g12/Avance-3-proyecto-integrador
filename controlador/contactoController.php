<?php
require_once('modelo/contactoModel.php');
class contactoController{
    private $contactoModel;
    public function __construct(){
        $this->contactoModel = new contactoModel();
    }
    public static function contacto(){

        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new contactoModel();
            $datos = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/contacto.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/contacto.php'); 
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/contacto.php'); 
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datos = []; 
            require_once('vista/paginas/contacto.php');  // Redirige o muestra una vista pública
        }
    }
}

?>