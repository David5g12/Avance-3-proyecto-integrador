<?php
class reservaModel{
    private $reserva;

    public function __construct(){
        $this->reserva=array();
    }
    public function mostrarReservas(){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT  id_reserva, id_usuario, id_paquete, cantidad_reservar, 
        DATE(fecha_reserva) AS fecha_reserva,  -- Extraer solo la fechafecha_actividad, 
        fecha_actividad,
        inicio_actividad,fecha_fin,estado 
        FROM Reservas;";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->reserva[]=$filas;
        }
        return $this->reserva;
    }
    public function insertarReserva($id_usuario,$id_paquete,$cantidad_reservar,$fecha_actividad,$inicio_actividad,$fecha_fin,$estado){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "INSERT INTO Reservas (id_usuario, id_paquete,cantidad_reservar,fecha_actividad,inicio_actividad,fecha_fin, estado) 
            VALUES ('$id_usuario','$id_paquete','$cantidad_reservar','$fecha_actividad','$inicio_actividad','$fecha_fin', $estado);";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return true;
        }
    }
    public function editarReservas($id) {
        include_once('conexion.php');
        $db=new conexion();
        $consulta="select * from Reservas WHERE id_reserva=".$id.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)){
                $this->reserva[]=$filas;
        }
        return $this->reserva;
    }
    public static function actualizarReservas($id,$id_usuario,$id_paquete,$cantidad_reservar,$fecha_actividad,$inicio_actividad,$fecha_fin,$estado){
        include_once('conexion.php');
        $db=new conexion();
        //validacion de fechas nulas NULL
        $fecha_actividad = empty($fecha_actividad) ? "NULL" : "'$fecha_actividad'";
        $inicio_actividad = empty($inicio_actividad) ? "NULL" : "'$inicio_actividad'";
        $fecha_fin = empty($fecha_fin) ? "NULL" : "'$fecha_fin'";
        
        $consulta="UPDATE Reservas set id_usuario=".$id_usuario.",id_paquete=".$id_paquete.",
        cantidad_reservar =".$cantidad_reservar.",fecha_actividad=".$fecha_actividad.",inicio_actividad=".$inicio_actividad.",fecha_fin=".$fecha_fin.", estado=".$estado."
        WHERE id_reserva=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }  
    }
    public static function eliminarReservas($id){
        include_once('conexion.php');
        $db=new conexion();
        $consulta="DELETE FROM Reservas where id_reserva=".$id; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return;
        }
        else{
            return false;
        }
    }

    //permisos de submenu 
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

    public function ReservaCliente(){
        include_once('conexion.php');
        $db=new conexion();

        session_start();  // Asegúrate de que la sesión esté iniciada
        $id_usuario = null;  // Inicializa la variable (puede ser null o cualquier valor por defecto)
        // Verifica si hay un usuario en sesión
        if (isset($_SESSION['id_usuario'])) {
            $id_usuario = $_SESSION['id_usuario']; 
        }

        $consulta = "SELECT Usuarios.nombre, Usuarios.apellido, Usuarios.telefono, Paquetes.id_paquete,Paquetes.nombre_paquete, Paquetes.precio, 
                    Paquetes.num_personas,Paquetes.imagen, Reservas.id_reserva, Reservas.cantidad_reservar, 
                    DATE(Reservas.fecha_reserva) AS fecha_reserva, Reservas.fecha_actividad, Reservas.inicio_actividad,
                    Reservas.fecha_fin, Reservas.estado
                FROM 
                    Reservas 
                JOIN 
                    Usuarios ON Reservas.id_usuario = Usuarios.id_usuario 
                JOIN 
                    Paquetes ON Reservas.id_paquete = Paquetes.id_paquete
                WHERE 
                    Reservas.id_usuario = ".$id_usuario.";"; 
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->reserva[]=$filas;
        }
        return $this->reserva;
    }


    






}
    

?>
