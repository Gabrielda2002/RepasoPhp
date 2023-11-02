<?php
      include_once('../PHP/modulos/controlador.php');
      $controlador = new ControladorEstudiante();
      if(isset($_POST['enviar'])){
            $r = $controlador->crear($_POST['numdoc'], $_POST['doctype'], $_POST['name'], $_POST['lastname1'], $_POST['lastname2'],
                                    $_POST['yearsold'], $_POST['emailins'], $_POST['emailper'], $_POST['phonenumbre'], $_POST['address'], $_POST['genus']);

            if($r){
                  echo "Se a registrado un nuevo usuario";
            }else{
                  echo "El usuario que esta intentando ingresar ya esta registrado.";
            }
      }
?>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Crear Registro</title>
</head>
<body>
      <form action="" method="post" class="form"">
            <div class="padre">

                  <div class="hijo13">
                  <nav>
                        <ul>
                              <li id="accesoBarra">
                              <a  id="textBarra"href="../PHP/index.php">Inicio</a>
                              </li>
                              <li id="accesoBarra">
                              <a id="textBarra" href="../PHP/vistas/inicio.php">Listar</a>
                              </li>
                        </ul>
                  </nav>
                  </div>
                  <div class="hijo1">
                        <h3>
                              Registro estudiantes
                        </h3>
                  </div>
                  <div class="hijo2">
                        <label for="" id="text">
                              <p>Seleccione su documento de identidad</p>
                              <select name="doctype" id="doctype">
                                    <option value="Seleccione">Seleccione</option>
                                    <option value="Cedula de ciudadania">Cedula de Ciudadania</option>
                                    <option value="Tarjeta de identidad">Tarjeta de Identidad</option>
                                    <option value="Pasaporte">Pasaporte</option>
                              </select>
                        </label>
                  </div>
                  <div class="hijo3">
                        <label for="" id="text">
                              <p>Digite su numero de identidad</p>
                              <input type="text" name="numdoc" class="docnum" required>
                        </label>
                  </div>
                  <div class="hijo4">
                        <p>Nombre</p>
                        <input type="text" name="name" class="name" >
                  </div>
                  <div class="hijo5">
                        <label for="" id="text">
                              <p>Primer apellido</p>
                              <input type="text" name="lastname1" class="lastname">
                        </label>
                  </div>
                  <div class="hijo6">
                        <label for="" id="text">
                              <p>Segundo apellido</p>
                              <input type="text" name="lastname2" class="lastname2">
                        </label>
                  </div>
                  <div class="hijo13">
                        <label for="" id="text">
                              <p>Genero</p>
                              <select name="genus" class="genero">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="56 tipos de gays">56 Tipos de Gays</option>
                              </select>
                        </label>
                  </div>
                  <div class="hijo7">
                        <label for="" id="text">
                              <p>Correo institucional</p>
                              <input type="email" name="emailins" class="emailins">
                        </label>
                  </div>
                  <div class="hijo8">
                        <label for="" id="text">
                              <p>Correo personal</p>
                              <input type="email" name="emailper" class="imailper">
                        </label>
                  </div>
                  <div class="hijo9">
                        <label for="" id="text">
                              <p>Numero de telefono</p>
                              <input type="text" name="phonenumbre" class="phone">
                        </label>
                  </div>
                  <div class="hijo10">
                        <label for="" id="text">
                              <p>Edad</p>
                              <input type="number" name="yearsold" class="year">
                        </label>
                  </div>
                  <div class="hijo12">
                        <label for="" id="text">
                              <p>Direccion</p>
                              <input type="text" name="address" class="direccion" required>
                        </label>
                  </div>
                  <div class="hijo11">
                        <input type="submit" name="enviar" class="submit">
                  </div>
            </div>

      </form>
</body>
</html>