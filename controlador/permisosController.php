<?php
require_once('modelo/permisosModel.php');
class permisosController{
    private $permisosModel;
    public function __construct(){
        $this->permisosModel = new permisosModel();
    }
    public static function permisos(){
        $pasaPermiso = new permisosModel();
        $datos=$pasaPermiso->mostrarPermisos();
        require_once('vista/paginas/permisos.php');
    }

    public static function agregarPermiso(){
        require_once('vista/paginas/agregarPermiso.php');
    }

    public static function guardarPermiso(){
        $id_rol=$_REQUEST['id_rol'];
        $menu=$_REQUEST['menu'];
        $pasaPermiso = new permisosModel();
        $pasaPermiso->insertarPermisos($id_rol,$menu);
        header("location:".urlsite."index.php?p=permisos");
        
    }
    public static function editarPermiso(){
        $id =$_REQUEST['id'];
        $pasaPermiso = new permisosModel();
        $datos=$pasaPermiso->editarPermisos($id);
        require_once('vista/paginas/editarPermiso.php');
        
    }

    public static function actualizarPermiso(){
        $id=$_REQUEST['id'];
        $id_rol=$_REQUEST['id_rol'];
        $menu=$_REQUEST['menu'];
        $pasaPermiso = new permisosModel();
        $pasaPermiso->actualizarPermiso($id,$id_rol,$menu);
        
        header("location:".urlsite."index.php?p=permisos");
    }
    public static function eliminarPermiso(){
        $id =$_REQUEST['id'];
        $pasaPermiso = new permisosModel();
        $pasaPermiso->eliminarPermisos($id);
        header("location:".urlsite."index.php?p=permisos");
    }




    
}

