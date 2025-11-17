<?php
class registroModel {
    private $db;

    public function __construct(){
        require_once('conexion.php');

        $this->db = new conexion();
    }

    public function registrarUsuario($rol, $nombre, $apellido, $correo, $clave, $telefono) {

        $consulta = "INSERT INTO Usuarios (id_rol, nombre, apellido, correo_electronico, clave, telefono) 
            VALUES (:id_rol, :nombre, :apellido, :correo, :clave, :telefono)";

        $stmt = $this->db->prepare($consulta);

        $stmt->bindParam(':id_rol', $rol);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':clave', $clave);
        $stmt->bindParam(':telefono', $telefono);

        try {
            $stmt->execute();
            return "Usuario registrado con éxito.";
        } catch (PDOException $e) {
            return "Error al registrar el usuario: " . $e->getMessage();
        }
    }    
    
    
    
}
?>
