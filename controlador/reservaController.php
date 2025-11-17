<?php
require_once('modelo/reservaModel.php');
class reservaController{
    private $reservaModel;
    public function __construct(){
        $this->reservaModel = new reservaModel();
    }

    //este metodo hace la consulta de la tabla reserva y restringir el menu de opciones 
    public static function tablaReserva(){
        $pasarReserva = new reservaModel();
        $datos=$pasarReserva->mostrarReservas();

        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new reservaModel();
            $datosPermiso = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/tablaReserva.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/tablaReserva.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/tablaReserva.php');
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datosPermiso = []; 
            require_once('vista/paginas/tablaReserva.php'); // Redirige o muestra una vista pública
        }
        require_once('vista/paginas/tablaReserva.php');
    }

    public static function verMireserva(){
        $pasarReserva = new reservaModel();
        $datosCliente=$pasarReserva->ReservaCliente();


        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new reservaModel();
            $datosPermiso = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/verMireserva.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/verMireserva.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/verMireserva.php');
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datosPermiso = []; 
            require_once('vista/paginas/verMireserva.php'); // Redirige o muestra una vista pública
        }
        require_once('vista/paginas/verMireserva.php');

    }


   public static function agregarReserva(){
        require_once('vista/paginas/agregarReserva.php');
    }

    public static function guardarReserva(){
        $id_usuario=$_REQUEST['id_usuario'];
        $id_paquete=$_REQUEST['id_paquete'];
        $cantidad_reservar=$_REQUEST['cantidad_reservar'];
        $fecha_actividad=$_REQUEST['fecha_actividad'];
        $inicio_actividad=$_REQUEST['inicio_actividad'];
        $fecha_fin=$_REQUEST['fecha_fin'];
        $estado=$_REQUEST['estado'];
        $pasarReserva = new reservaModel();
        $pasarReserva->insertarReserva($id_usuario,$id_paquete,$cantidad_reservar,$fecha_actividad,$inicio_actividad,$fecha_fin,$estado);
        header("location:".urlsite."index.php?p=tablaReserva");
    }

    public static function editarReserva(){
        $id =$_REQUEST['id'];
        $pasarReserva = new reservaModel();
        $datos=$pasarReserva->editarReservas($id);
        require_once('vista/paginas/editarReserva.php');
        
    }
    public static function actualizarReserva(){
        $id=$_REQUEST['id'];
        $id_usuario=$_REQUEST['id_usuario'];
        $id_paquete=$_REQUEST['id_paquete'];
        $cantidad_reservar=$_REQUEST['cantidad_reservar'];
        $fecha_actividad=$_REQUEST['fecha_actividad'];
        $inicio_actividad=$_REQUEST['inicio_actividad'];
        $fecha_fin=$_REQUEST['fecha_fin'];
        $estado=$_REQUEST['estado'];
        $pasarReserva = new reservaModel();
        $pasarReserva->actualizarReservas($id,$id_usuario,$id_paquete,$cantidad_reservar,$fecha_actividad,$inicio_actividad,$fecha_fin,$estado);
        
        header("location:".urlsite."index.php?p=tablaReserva");
    }
    public static function eliminarReserva(){
        $id =$_REQUEST['id'];
        $pasarReserva = new reservaModel();
        $pasarReserva->eliminarReservas($id);
        header("location:".urlsite."index.php?p=tablaReserva");
    }
    
}
?>