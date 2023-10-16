<?php
    // aqui heredamos la clase conexion que contiene la conexion a la base de datos
    include_once ("conexion.php");
    class Estudiante extends Conexion{
        private $Id;
        private $NumDocApr;
        private $typeDoc;
        private $name;
        private $lastName1;
        private $lastName2;
        private $yearsOld;
        private $emailIns;
        private $emailPer;
        private $date;
        private $phone;
        private $adress;
        private $genus;


        public function setId($Id) {
            $this->id = $Id;
        }
    
        public function getId() {
            return $this->Id;
        }
        public function __construct(){
            $this->con = new Conexion();

        }
        public function set($atrubuto, $contenido){
            $this->$atrubuto = $contenido;
        }
        public function get($atributo){
            return $this->$atributo;
        }
        public function listar(){
            $sql ="SELECT * FROM aprendices";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
        }
        public function crear(){
            $sql2 = "SELECT * FROM aprendices WHERE NumDoc = :NumDocApr";
            $params2 = array(':NumDocApr' => $this->NumDocApr);
            $resultado = $this->con->consultaPreparada($sql2, $params2);
            $num = count($resultado);
            
            if($num != 0){
                return false;
            } else {
                $sql = "INSERT INTO aprendices (NumDoc, TipoDoc, Nombre, Apellido1, Apellido2, Edad, EmailInst, EmailPer, Sexo, celular, Direccion, FechaRegis) 
                VALUES (:NumDoc, :typeDoc, :name, :lastName1, :lastName2, :yearsOld, :emailIns, :emailPer, :genus, :phone, :direccion, :fechaRegis)";
                
                $params = array(
                    ':NumDoc' => $this->NumDocApr,
                    ':typeDoc' => $this->typeDoc,
                    ':name' => $this->name,
                    ':lastName1' => $this->lastName1,
                    ':lastName2' => $this->lastName2,
                    ':yearsOld' => $this->yearsOld,
                    ':emailIns' => $this->emailIns,
                    ':emailPer' => $this->emailPer,
                    ':genus' => $this->genus,
                    ':phone' => $this->phone,
                    ':direccion' => $this->adress,
                    ':fechaRegis' => date('Y-m-d H:i:s')  // Utiliza NOW() en lugar de date si prefieres que MySQL maneje la fecha.
                );
                // var_dump($params);

                $this->con->consultaPreparada($sql, $params);
                return true;
            }
        }
        
        


        public function eliminar(){
            $sql = "DELETE FROM aprendices WHERE Id = '{$this->Id}'";
            $this->con->consultaSimple($sql);
        }
        public function ver() {
            $sql = "SELECT * FROM aprendices WHERE Id = :Id LIMIT 1";
            $params = array(':Id' => $this->Id);
            $rows = $this->con->consultaPreparada($sql, $params);
    
            if ($rows) {
                return $row = $rows[0];
                
            } else {
                return null;
            }
        }
        

        public function actualizar(){
            $sql = "UPDATE aprendices SET Nombre = :name,  Apellido1 = :lastName1, Apellido2 = :lastName2, Edad = :yearsOld, EmailInst = :emailIns, EmailPer = :emailPer, fechaRegis = :fechaRegis, celular =  :phone, Direccion = :direccion, Sexo = :genus WHERE Id = :Id";
            $params = array(
                ':Id' => $this->Id,
                ':name' => $this->name,
                ':lastName1' => $this->lastName1,
                ':lastName2' => $this->lastName2,
                ':yearsOld' => $this->yearsOld,
                ':emailIns' => $this->emailIns,
                ':emailPer' => $this->emailPer,
                ':genus' => $this->genus,
                ':phone' => $this->phone,
                ':direccion' => $this->adress,
                ':fechaRegis' => date('Y-m-d H:i:s')
            );
            try {
                $this->con->consultaPreparada($sql, $params);
                return true;
            } catch (PDOException $th) {
                echo "Error".$th->getMessage();
                return false;
            }
        }
    }
?>