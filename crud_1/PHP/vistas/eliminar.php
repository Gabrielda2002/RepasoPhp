<?php
    // verificar que el id se esta enviando

    //se utiliza "!" antes de el empty para negar la funcion y sera true si el Id no esta vaccio y si esta vacio o no esta definido sera false
    if (isset($_GET['Id']) && !empty($_GET['Id'])){
        //agarrar el Id de la URL
        $Id = $_GET['Id'];

        include_once('../modulos/controlador.php');

        $controlador = new ControladorEstudiante();
        $controlador->eliminar($Id);

        //redirigir luego de la accion
        header('Location: ../index.php', true, 302);
        
    }else{
        header('Location: error.php');
        exit();
    }

?>