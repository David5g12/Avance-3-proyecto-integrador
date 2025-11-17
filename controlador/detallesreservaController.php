<?php
require_once('modelo/detallereservaModel.php');
class detallesreservaController{
    private $detallereservaModel;

    public function __construct(){
        $this->detallereservaModel = new detallereservaModel();
    }
    
    public static function detalleReserva(){
        $pasarReserva = new detallereservaModel();
        $datos=$pasarReserva->mostrarReservas();

        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new paqueteModel();
            $datosPermiso = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/detalleReserva.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/detalleReserva.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/detalleReserva.php');
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datosPermiso = []; 
            require_once('vista/paginas/detalleReserva.php'); // Redirige o muestra una vista pública
        }
        require_once('vista/paginas/detalleReserva.php');
    }

}
?>