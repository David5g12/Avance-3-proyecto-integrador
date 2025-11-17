<?php
class permisosModel{

    private $permiso;

    public function __construct(){
        $this->permiso=array();
    }
    public function mostrarPermisos(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT * from Permiso;";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->permiso[]=$filas;
        }
        return $this->permiso;
    }

    public function insertarPermisos($id_rol,$menu){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Permiso (id_rol,nombre_menu) 
            VALUES ('$id_rol','$menu');";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }
    }

    public function editarPermisos($id) {
        include_once('conexion.php');
        $db=new conexion();
        $consulta="select * from Permiso WHERE id_permiso=".$id.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
                $this->permiso[]=$filas;
        }
        return $this->permiso;
    }

    public static function actualizarPermiso($id,$id_rol,$menu){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="UPDATE Permiso set id_rol=".$id_rol.",nombre_menu='".$menu."'
        WHERE id_permiso=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }  
    }

    public static function eliminarPermisos($id){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="DELETE FROM Permiso where id_permiso=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return;
        }
        else{
            return false;
        }
    }



}

?>