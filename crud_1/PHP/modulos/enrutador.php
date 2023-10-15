<?php
    class Enrutador{
        public function cargarModulo($vista){
            switch($vista):
            case "crear":
                include_once('../html/index.php');
                break;
            default:
                include_once("vistas/error.php");

            endswitch;
        }

        public function validarGet($variable){
            if(empty($variable)){
                include_once('../html/index.php');
            }else{
                return true;
            }
        }
    }

?>