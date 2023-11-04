<?php
include_once('../modulos/controlador.php');

if(isset($_POST['editar'])) {
    $id = $_POST['Id'];
    $name = $_POST['name'];
    $lastName1 = $_POST['lastname1'];
    $lastName2 = $_POST['lastname2'];
    $genus = $_POST['genus'];
    $emailIns = $_POST['emailins'];
    $emailPer = $_POST['emailper'];
    $phoneNumber = $_POST['phonenumber'];
    $yearsOld = $_POST['yearsold'];
    $address = $_POST['address'];
    
    // Crea un objeto del controlador
    $controlador = new ControladorEstudiante();

    // Llama al método actualizar del controlador con los argumentos adecuados
    $resultado = $controlador->editar($id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);

    if($resultado) {
        echo "Estudiante actualizado correctamente.";
    } else {
        echo "Error al actualizar el estudiante.";
    }
}

?>
