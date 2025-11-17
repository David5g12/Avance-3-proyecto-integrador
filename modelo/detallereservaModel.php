<?php

class detallereservaModel{

    private $reserva;

    public function __construct(){
        $this->reserva=array();
    }

    public function mostrarReservas(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT  Usuarios.nombre, Usuarios.apellido, Usuarios.telefono, Paquetes.id_paquete,
                             Paquetes.nombre_paquete, Paquetes.precio,Paquetes.num_personas, Reservas.id_reserva, Reservas.cantidad_reservar, 
                              DATE(Reservas.fecha_reserva) AS fecha_reserva, Reservas.fecha_actividad, Reservas.inicio_actividad,Reservas.fecha_fin, Reservas.estado
            FROM 
                Reservas 
            JOIN 
                Usuarios ON Reservas.id_usuario = Usuarios.id_usuario 
            JOIN 
                Paquetes ON Reservas.id_paquete = Paquetes.id_paquete;";

        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->reserva[]=$filas;
        }
        return $this->reserva;
    }

    public function mostrarpermiso($id_rol){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT * FROM Permiso WHERE id_rol=".$id_rol.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->reserva[]=$filas;
        }
        return $this->reserva;
    }





}

?>
