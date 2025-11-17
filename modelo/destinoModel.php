<?php
class destinoModel{

    private $destino;

    public function __construct(){
        $this->destino=array();
    }
    public function mostrardestino(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "select * from Destinos;";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->destino[]=$filas;
        }
        return $this->destino;
    }

    public function insertarDestino($nombre,$ubicacion,$popularidad,$descripcion,$tipo,$imagen){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Destinos (nombre_destino, ubicacion, popularidad,descripcion, tipo_destino,imagen) 
            VALUES ('$nombre','$ubicacion','$popularidad','$descripcion','$tipo','$imagen');";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }
    }

    public function editarDestino($id) {
        include_once('conexion.php');
        $db=new conexion();
        $consulta="select * from Destinos WHERE id_destino=".$id.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
                $this->destino[]=$filas;
        }
        return $this->destino;
    }
    public static function actualizarDestino($id,$nombre,$ubicacion,$popularidad,$descripcion,$tipo,$imagen){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="UPDATE Destinos set nombre_destino='".$nombre."',ubicacion='".$ubicacion."',
        popularidad=".$popularidad.",descripcion='".$descripcion."',tipo_destino='".$tipo."',imagen='".$imagen."' 
        WHERE id_destino=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }  
    }
    public static function eliminardestino($id){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="DELETE FROM Destinos where id_destino=".$id; 
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
            $this->destino[]=$filas;
        }
        return $this->destino;
    }



    

    
}
?>