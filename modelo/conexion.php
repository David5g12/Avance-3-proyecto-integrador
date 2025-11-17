<?php
class Conexion extends PDO{
    private $hostBD='tu servidor';
    private $nombreBD='nombre de la base de datos';
    private $usuarioBD='nombre de usuario';
    private $passwordBD='tu contraseña';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
        
    }
}
?>
