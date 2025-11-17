<?php
class loginModel{
    private $db;

    public function __construct(){
        require_once('conexion.php');
        $this->db = new conexion();
    }

    public function verificarUsuario($correo,$clave){
        $consulta = "select * from Usuarios where correo_electronico = :correo and clave = :clave";
        $stmt = $this->db->prepare($consulta);
        $stmt->bindParam(':correo',$correo);
        $stmt->bindParam(':clave', $clave);

        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Iniciar la sesión y almacenar el ID del usuario
            session_start();
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['id_rol'] = $usuario['id_rol'];
            
        }

        return $usuario;

        
    }



    
}
?>