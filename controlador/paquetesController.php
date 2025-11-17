<?php
require_once('modelo/paqueteModel.php');
class paquetesController{
    private $paqueteModel;
    public function __construct(){
        $this->paqueteModel = new paqueteModel();
    }
    public static function paquetes(){
        $pasarPaquete = new paqueteModel();
        $datos=$pasarPaquete->mostrarpaquete();

        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new paqueteModel();
            $datosPermiso = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/paquetes.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/paquetes.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/paquetes.php');
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datosPermiso = []; 
            require_once('vista/paginas/destinos.php'); // Redirige o muestra una vista pública
        }
        //este es la direccion para los paquetes los demas son para los permisos del menu
        require_once('vista/paginas/paquetes.php');
    }

    public static function confirmarReserva(){
        $id_paquete=$_REQUEST['id_paquete'];
        require_once('vista/paginas/confirmarReserva.php');
    }

    public static function guardarReserva(){
        $id_usuario=$_REQUEST['id_usuario'];
        $id_paquete=$_REQUEST['id_paquete'];
        $cantidad_reservar=$_REQUEST['cantidad_reservar'];
        $estado=$_REQUEST['estado'];
        $pasarReserva = new paqueteModel();
        $pasarReserva->insertarReservas($id_usuario,$id_paquete,$cantidad_reservar,$estado);
        header("location:".urlsite."index.php?p=paquetes");
    }



    
    
    public static function tablapaquete(){
        $pasarPaquete = new paqueteModel();
        $datos=$pasarPaquete->mostrarpaquete();
        require_once('vista/paginas/tablapaquete.php');     
    }
    
    public static function agregarPaquete(){
        require_once('vista/paginas/agregarPaquete.php');
    }
    public static function guardarPaquete(){
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $precio=$_REQUEST['precio'];
        $duracion=$_REQUEST['duracion'];
        $num_personas=$_REQUEST['num_personas'];
        $imagen=$_REQUEST['imagen'];
        $id_destino=$_REQUEST['id_destino'];
        $pasarPaquete = new paqueteModel();
        $pasarPaquete->insertarPaquete($nombre,$descripcion,$precio,$duracion,$num_personas,$imagen,$id_destino,);
        header("location:".urlsite."index.php?p=tablapaquete");
        
    }
    public static function editarPaquete(){
        $id =$_REQUEST['id'];
        $pasarPaquete = new paqueteModel();
        $datos=$pasarPaquete->editarPaquetes($id);
        require_once('vista/paginas/editarPaquete.php');
        
    }
    public static function actualizarPaquete(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $precio=$_REQUEST['precio'];
        $duracion=$_REQUEST['duracion'];
        $num_personas=$_REQUEST['num_personas'];
        $imagen=$_REQUEST['imagen'];
        $id_destino=$_REQUEST['id_destino'];
        $pasarDestino = new paqueteModel();
        $pasarDestino->actualizarPaquetes($id,$nombre,$descripcion,$precio,$duracion,$num_personas,$imagen,$id_destino);
        
        header("location:".urlsite."index.php?p=tablapaquete");
    }
    public static function eliminarPaquete(){
        $id =$_REQUEST['id'];
        $pasarPaquete = new paqueteModel();
        $pasarPaquete->eliminarPaquetes($id);
        header("location:".urlsite."index.php?p=tablapaquete");
    }


}

?>
