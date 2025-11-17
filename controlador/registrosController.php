<?php
require_once('modelo/registroModel.php');


class registrosController {
    private $registroModel;
    public function __construct(){
        $this->registroModel = new registroModel();
    }
    public static function registro(){
        require_once('vista/paginas/registro.php');
    }

    public function registrar(){
        if(isset($_POST['rol'])&& 
        isset($_POST['nombre'])&& 
        isset($_POST['apellido'])&& 
        isset($_POST['correo'])&& 
        isset($_POST['clave'])&& 
        isset($_POST['telefono'])){

            $rol = $_POST['rol'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $telefono = $_POST['telefono'];

            $mensaje = $this->registroModel->registrarUsuario($rol, $nombre, $apellido, $correo, $clave, $telefono);
            echo $mensaje;

            header("location:".urlsite."index.php");
            exit;


        }
        else {
            echo "Faltan datos para registrar el usuario.";
        }
    }
    
}
?>

