<?php
    include_once('../modulos/controlador.php');
    $controlador = new ControladorEstudiante();

    if(isset($_POST['editar'])){
        $Id = $_POST['Id'];
        $NumDoc = $_POST['NumDoc'];
        $typeDoc = $_POST['typeDoc'];
        $name = $_POST['name'];
        $lastName1 = $_POST['lastName1'];
        $lastName2 = $_POST['lastName2'];
        $yearsOld = $_POST['yearsOld'];
        $emailInst = $_POST['emailInst'];
        $emailPer = $_POST['emailPer'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $genus = $_POST['genus'];

        $controlador->editar($Id, $NumDoc, $typeDoc, $name, $lastName1, $lastName2, $yearsOld, $emailInst, $emailPer, $phone, $adress, $genus);
        header('Location: ../index.php');
    }
?>
