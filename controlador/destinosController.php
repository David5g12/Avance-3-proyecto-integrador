<?php
require_once('modelo/destinoModel.php');
class destinosController{
    private $destinoModel;
    public function __construct(){
        $this->destinoModel = new destinoModel();
    }
    public static function destinos(){
        $pasarDestino = new destinoModel();
        $datosdestino=$pasarDestino->mostrardestino();


        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new destinoModel();
            $datos = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/destinos.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/destinos.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/destinos.php');
                    break;
            }
        } else {
            // Si no hay usuario en sesión, redirige al login o muestra contenido público
            $datos = []; 
            require_once('vista/paginas/destinos.php'); // Redirige o muestra una vista pública
        }

        require_once('vista/paginas/destinos.php');

    }

    public static function tabladestino(){
        $pasarDestino = new destinoModel();
        $datos=$pasarDestino->mostrardestino();
        require_once('vista/paginas/tabladestino.php');
    }


    public static function agregarDestino(){
        require_once('vista/paginas/agregarDestino.php');
    }

    public static function guardarDestino(){
        $nombre=$_REQUEST['nombre'];
        $ubicacion=$_REQUEST['ubicacion'];
        $popularidad=$_REQUEST['popularidad'];
        $descripcion=$_REQUEST['descripcion'];
        $tipo=$_REQUEST['tipo'];
        $imagen=$_REQUEST['imagen'];
        $pasarDestino = new destinoModel();
        $pasarDestino->insertarDestino($nombre,$ubicacion,$popularidad,$descripcion,$tipo,$imagen);
        header("location:".urlsite."index.php?p=tablaDestino");
        
    }
    public static function editarDestino(){
        $id =$_REQUEST['id'];
        $pasarDestino = new destinoModel();
        $datos=$pasarDestino->editarDestino($id);
        require_once('vista/paginas/editarDestino.php');
        
    }
    public static function actualizarDestino(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $ubicacion=$_REQUEST['ubicacion'];
        $popularidad=$_REQUEST['popularidad'];
        $descripcion=$_REQUEST['descripcion'];
        $tipo=$_REQUEST['tipo'];
        $imagen=$_REQUEST['imagen'];
        $pasarDestino = new destinoModel();
        $pasarDestino->actualizarDestino($id,$nombre,$ubicacion,$popularidad,$descripcion,$tipo,$imagen);
        
        header("location:".urlsite."index.php?p=tabladestino");
    }
    public static function eliminarDestinos(){
        $id =$_REQUEST['id'];
        $pasarDestino = new destinoModel();
        $pasarDestino->eliminardestino($id);
        header("location:".urlsite."index.php?p=tabladestino");
    }

    

    
}


?>