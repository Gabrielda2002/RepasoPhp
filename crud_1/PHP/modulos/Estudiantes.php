<?php
    // aqui heredamos la clase conexion que contiene la conexion a la base de datos
    include_once ("conexion.php");
    class Estudiante extends Conexion{
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
            $sql = "SELECT * FROM aprendices WHERE NumDoc = '{$this->NumDocApr}'";
            $this->con->consultaSimple($sql);
        }
        public function ver(){
            $sql = "SELECT * FROM aprendices WHERE NumDoc = :NumDoc LIMIT 1";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':NumDoc', $this->NumDocApr);
            
            try {
                $stmt->execute();
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        
                if ($rows) {
                    $this->NumDocApr = $rows['NumDoc'];
                    $this->typeDoc = $rows['TipoDoc'];
                    $this->name = $rows['Nombre'];
                    $this->lastName1 = $rows['Apellido1'];
                    $this->lastName2 = $rows['Apellido2'];
                    $this->yearsOld = $rows['Edad'];
                    $this->emailIns = $rows['EmailInst'];
                    $this->emailPer = $rows['EmailPer'];
                    $this->date = $rows['FechaRegis'];
                    $this->phone = $rows['celular']; 
                    $this->adress = $rows['Direccion'];
                    $this->genus = $rows['Sexo'];
                    return true;  // Si se encontró el registro
                } else {
                    return false;  // Si no se encontró el registro
                }
            } catch (PDOException $e) {
                // Manejar errores de la base de datos
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
        

        public function actualizar(){
            $sql = "UPDATE aprendices SET Nombre = '{$this->name}',  Apellido1 = '{$this->lastName1}', Apellido2 = '{$this->lastName2}', Edad = '{$this->yearsOld}', EmailInst = '{$this->emailIns}', EmailPer = '{$this->emailPer}', fechaRegis = NOW(), cX|elular =  '{$this->phone}', Direccion = '{$this->adress}', Sexo = '{$this->genus}' WHERE NumDoc = '{$this->numDocApr}'";

            $this->con->consultaSimple($sql);
        }
    }
?>