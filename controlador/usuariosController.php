<?php
require_once('modelo/usuarioModel.php');
class usuariosController{
    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new usuarioModel();
    }
    public static function usuario(){
        $pasarUsuario = new usuarioModel();
        $datos=$pasarUsuario->mostrarUsuarios();

        session_start();  // Asegúrate de que la sesión esté iniciada

        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_rol'])) {
            $id_rol = $_SESSION['id_rol'];

            $pasarpermiso = new paqueteModel();
            $datosPermiso = $pasarpermiso->mostrarpermiso($id_rol);
            
            // Si el usuario esta logiado aparece su rol de usuario
            switch ($id_rol) {
                case 1:  // Administrador
                    require_once('vista/paginas/usuario.php');
                    break;

                case 2:  // Empleado
                    require_once('vista/paginas/usuario.php');
                    break;

                case 3:  // Cliente
                    require_once('vista/paginas/usuario.php');
                    break;
            }
        } else {
            // Si no hay usuario logueado muestra contenido público
            $datosPermiso = []; 
            require_once('vista/paginas/usuario.php'); // Redirige o muestra una vista pública
        }

        //muestra la tabla de usuarios 
        require_once('vista/paginas/usuario.php');
    }

    public static function usuarioInterno(){
        require_once('vista/paginas/usuarioInterno.php');
    }

    public static function guardarUsuario(){
        $rol=$_REQUEST['rol'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $correo=$_REQUEST['correo'];
        $clave=$_REQUEST['clave'];
        $telefono=$_REQUEST['telefono'];
        $pasarUsuario = new usuarioModel();
        $pasarUsuario->insertarUsuario($rol,$nombre,$apellido,$correo,$clave,$telefono);
        header("location:".urlsite."index.php?p=usuario");
        
    }
    
    
    
    public static function editar(){
        $id =$_REQUEST['id'];
        $pasarUsuario = new usuarioModel();
        $datos=$pasarUsuario->editarusuario($id);
        require_once('vista/paginas/editar.php');
        
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $rol=$_REQUEST['rol'];
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $correo=$_REQUEST['correo'];
        $clave=$_REQUEST['clave'];
        $telefono=$_REQUEST['telefono'];
        $pasarUsuario = new usuarioModel();
        $pasarUsuario->actualizarUsuario($id,$rol,$nombre,$apellido,$correo,$clave,$telefono);
        
        header("location:".urlsite."index.php?p=usuario");
    }
    public static function eliminar(){
        $id =$_REQUEST['id'];
        $pasarUsuario = new usuarioModel();
        $pasarUsuario->eliminarUsuario($id);
        
        header("location:".urlsite."index.php?p=usuario");

    }
 
}
?>