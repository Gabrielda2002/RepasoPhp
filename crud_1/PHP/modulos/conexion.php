<?php
      class Conexion{
            private $host = "localhost";
            private $user= "root";
            private $password ="";
            private $db = "sena";
            private $conect;
            public function __construct(){
                  $connectionString = "mysql:host=".$this-> host.";dbname=".$this->db.";charset=utf8";
                  try {
                        $this->conect=  new PDO($connectionString, $this->user, $this->password);
                        $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // echo "Conexion exitosa";
                  } catch (Exception $th) {
                        $this->conect="Error de conexion";
                        echo "Error: ". $th->getMessage();
                  }
            }
            public function consultaSimple($sql){
                  $stmt = $this->conect->prepare($sql);
                  $stmt->execute();
                  return $stmt->rowCount();

            }
            public function consultaRetorno($sql){
                  // Preparar y ejecutar la consulta
                  $stmt = $this->conect->prepare($sql);
                  $stmt->execute();
                  return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            public function consultaPreparada($sql, $params) {
                  $stmt = $this->conect->prepare($sql);
                  if ($stmt->execute($params)) {
                      return $stmt->fetchAll(PDO::FETCH_ASSOC);
                  } else {
                      // Manejar el error aquí si es necesario
                      return false;
                  }
              }
              
      }

      $conect = new conexion();
?>