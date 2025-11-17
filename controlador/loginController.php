<?php
require_once('modelo/loginModel.php');
class loginController{
    private $loginModel;

    public function __construct(){
        $this->loginModel = new loginModel();
    }
    public static function login(){
        require_once('vista/paginas/login.php');
    }

    public function autenticar(){
        if(isset($_POST['correo']) && isset($_POST['clave'])){
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];

            $usuario = $this->loginModel->verificarUsuario($correo,$clave);

            if($usuario){

                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: index.php");
                exit();
            }
            else{
                $mensaje = "Verifique sus datos e intente nuevamente.";
            }
        }
        else{
            $mensaje = "ingresa su correo y su contraseña por favor";
        
        }
        require_once('vista/paginas/login.php');
    }
}

?>