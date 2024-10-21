<?php
require_once('modelo/indexModel.php');
class IndexController{
    private $indexModel;
    function __construct(){
        $this->indexModel = new IndexModel();


    }  
    public static function index(){
        require_once("vista/index.php");
    }


}

?>