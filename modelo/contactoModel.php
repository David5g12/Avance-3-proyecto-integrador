<?php
class contactoModel{

    private $permiso;

    public function __construct(){
        $this->permiso=array();
    }
   
    public function mostrarpermiso($id_rol){
        include_once('conexion.php');
        $db=new conexion();
        $consulta = "SELECT * FROM Permiso WHERE id_rol=".$id_rol.";";
        $resultado=$db->prepare($consulta);
        $resultado->execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->permiso[]=$filas;
        }
        return $this->permiso;
    }
    
}
?>