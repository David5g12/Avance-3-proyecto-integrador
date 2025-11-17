<?php
class detallepaqueteModel{
    

    private $paquete;

    public function __construct(){
        $this->paquete=array();
    }
    public function mostrarpaquetes(){
        include_once('conexion.php');
        $db = new conexion();
        $consulta = "SELECT Paquetes.id_paquete, Paquetes.nombre_paquete, Paquetes.descripcion, Paquetes.precio,Paquetes.num_personas,
                     Paquetes.duracion, Destinos.nombre_destino, Destinos.ubicacion, Destinos.popularidad, 
                     Destinos.tipo_destino, Paquetes.imagen
                     FROM Paquetes
                     INNER JOIN Destinos ON Paquetes.id_destino = Destinos.id_destino;";
        
        $resultado = $db->prepare($consulta);
        $resultado->execute();
        while ($filas = $resultado->fetchall(PDO::FETCH_ASSOC)) {
            $this->paquete[] = $filas; // Cada fila se agrega directamente al arreglo
        }
        return $this->paquete;
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