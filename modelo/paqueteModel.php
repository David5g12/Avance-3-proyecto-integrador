<?php
class paqueteModel{

    private $paquete;

    public function __construct(){
        $this->paquete=array();
    }
    public function mostrarpaquete(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT * from Paquetes;";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->paquete[]=$filas;
        }
        return $this->paquete;
    }
    public function insertarPaquete($nombre,$descripcion,$precio,$duracion,$num_personas,$imagen,$id_destino){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Paquetes (nombre_paquete, descripcion, precio, duracion,num_personas,imagen,id_destino) 
            VALUES ('$nombre','$descripcion','$precio','$duracion','$num_personas','$imagen','$id_destino');";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }
    }

    public function editarPaquetes($id) {
        include_once('conexion.php');
        $db=new conexion();
        $consulta="select * from Paquetes WHERE id_paquete=".$id.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
                $this->paquete[]=$filas;
        }
        return $this->paquete;
    }
    public static function actualizarPaquetes($id,$nombre,$descripcion,$precio,$duracion,$num_personas,$imagen,$id_destino){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="UPDATE Paquetes set nombre_paquete='".$nombre."',descripcion='".$descripcion."',
        precio=".$precio.",duracion='".$duracion."',num_personas=".$num_personas.",imagen='".$imagen."',id_destino='".$id_destino."'
        WHERE id_paquete=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }  
    }
    public static function eliminarPaquetes($id){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="DELETE FROM Paquetes where id_paquete=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return;
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
    //inserta para resercar paquetes
    public function insertarReservas($id_usuario,$id_paquete,$cantidad_reservar,$estado){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Reservas (id_usuario, id_paquete,cantidad_reservar, estado) 
            VALUES ('$id_usuario','$id_paquete','$cantidad_reservar', $estado);";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }
    }



    
}
?>

