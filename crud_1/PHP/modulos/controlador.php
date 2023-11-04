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
            $this->Estudiante->set("NumDocApr", $NumDocApr); 
            $this->Estudiante->set("typeDoc", $typeDocApr); 
            $this->Estudiante->set("name", $name); 
            $this->Estudiante->set("lastName1", $lastName1); 
            $this->Estudiante->set("lastName2", $lastName2); 
            $this->Estudiante->set("yearsOld", $yearsOld); 
            $this->Estudiante->set("emailIns", $emailInst); 
            $this->Estudiante->set("emailPer", $emailPer); 
            // $this->Estudiante->set("fechaRegis", $date); 
            $this->Estudiante->set("phone", $phone); 
            $this->Estudiante->set("adress", $adress); 
            $this->Estudiante->set("genus", $genus); 
        
            $resultado = $this->Estudiante->crear();
            return $resultado;
        }
        
        public function eliminar($Id){
            $this->Estudiante->set("Id", $Id);
            $this->Estudiante->eliminar($Id);
        }
        public function ver($Id){    
            $this->Estudiante->set("Id", $Id);
            return $this->Estudiante->ver();
        }
        public function editar($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address){
            var_dump($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);
            $this->Estudiante->setId($Id);
            $this->Estudiante->set("name", $name);
            $this->Estudiante->set("lastName1", $lastName1);
            $this->Estudiante->set("lastName2", $lastName2);
            $this->Estudiante->set("yearsOld", $yearsOld);
            $this->Estudiante->set("emailIns", $emailIns);
            $this->Estudiante->set("emailPer", $emailPer);
            $this->Estudiante->set("phone", $phoneNumber);
            $this->Estudiante->set("adress", $address);
            $this->Estudiante->set("genus", $genus);
        
            $resultado = $this->Estudiante->actualizar($Id, $name, $lastName1, $lastName2, $genus, $emailIns, $emailPer, $phoneNumber, $yearsOld, $address);
            return $resultado;
        }
        
        

        public function consultaFicha($fichaId){
            $this->Estudiante->consultaFicha($fichaId);
        }
    }




?>