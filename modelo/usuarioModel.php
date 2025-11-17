<?php
class usuarioModel{
    private $usuario;

    public function __construct(){
        $this->usuario=array();
    }
    public function mostrarUsuarios(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT Usuarios.id_usuario, Usuarios.nombre, Usuarios.apellido, Usuarios.correo_electronico, Usuarios.telefono, Rol.descripcion AS rol, DATE(Usuarios.fecha_registro) AS fecha_registro
            FROM Usuarios 
            JOIN Rol ON Usuarios.id_rol = Rol.id_rol;";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->usuario[]=$filas;
        }
        return $this->usuario;
    }

    public function insertarUsuario($rol,$nombre,$apellido,$correo,$clave,$telefono){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Usuarios (id_rol, nombre, apellido, correo_electronico, clave, telefono) 
            VALUES ('$rol','$nombre','$apellido','$correo','$clave','$telefono');";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }


    }
    
    public function editarusuario($id) {
        include_once('conexion.php');
        $db=new conexion();
        $consulta="select * from Usuarios WHERE id_usuario=".$id.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
                $this->usuario[]=$filas;
        }
        return $this->usuario;
    }
    public static function actualizarUsuario($id,$rol,$nombre,$apellido,$correo,$clave,$telefono){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="UPDATE Usuarios set id_rol=".$rol.",
        nombre='".$nombre."',apellido='".$apellido."',correo_electronico='".$correo."',
        clave='".$clave."',telefono='".$telefono."' WHERE id_usuario=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }
        
    }
    public static function eliminarUsuario($id){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="DELETE FROM Usuarios where id_usuario=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }
        
    }

    public function mostrarpermiso($id_rol){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT * FROM Permiso WHERE id_rol=".$id_rol.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->paquete[]=$filas;
        }
        return $this->paquete;
    }




    
}



?>