<?php
    include_once('Estudiantes.php');
    class ControladorEstudiante{
        private $Estududiante;
        public function __construct(){
            $this->Estudiante = new Estudiante();
        }
        public function index(){
            $resultado = $this->Estudiante->listar();
            return $resultado;
        }
        public function crear($NumDocApr, $typeDocApr, $name, $lastName1, $lastName2, $yearsOld, $emailInst, $emailPer, $phone, $adress, $genus){
            $this->Estudiante->set("NumDocApr", $NumDocApr); // Corregido: "NumDoc" a "NumDocApr"
            $this->Estudiante->set("typeDoc", $typeDocApr); // Corregido: "TipoDoc" a "typeDoc"
            $this->Estudiante->set("name", $name); // Corregido: "Nombre" a "name"
            $this->Estudiante->set("lastName1", $lastName1); // Corregido: "Apellido1" a "lastName1"
            $this->Estudiante->set("lastName2", $lastName2); // Corregido: "Apellido2" a "lastName2"
            $this->Estudiante->set("yearsOld", $yearsOld); // Corregido: "Edad" a "yearsOld"
            $this->Estudiante->set("emailIns", $emailInst); // Corregido: "EmailInst" a "emailIns"
            $this->Estudiante->set("emailPer", $emailPer); // Corregido: "EmailPer" a "emailPer"
            // $this->Estudiante->set("fechaRegis", $date); // Este valor se asigna automáticamente en la clase Estudiante
            $this->Estudiante->set("phone", $phone); // Corregido: "celular" a "phone"
            $this->Estudiante->set("adress", $adress); // Corregido: "Direccion" a "adress"
            $this->Estudiante->set("genus", $genus); // Corregido: "Sexo" a "genus"
        
            $resultado = $this->Estudiante->crear();
            return $resultado;
        }
        
        public function eliminar($NumDocApr){
            $this->Estudiante->set("NumDoc", $NumDocApr);
            $this->Estudiante->eliminar();
        }
        public function ver($NumDocApr){    
            $this->Estudiante->set("NumDoc", $NumDocApr);
            $this->Estudiante->ver();
        }
        public function editar($NumDocApr){
            $this->Estudiante->set("NumDoc", $NumDocApr);
            $this->Estudiante->ver();
            $this->Estudiante->editar();
        }

    }




?>