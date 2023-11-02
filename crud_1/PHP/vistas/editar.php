<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
</head>
<body>
    <?php
        include_once('../modulos/controlador.php');
        $controlador = new ControladorEstudiante();
        $Id = $_GET['Id'];
        $estudiante = $controlador->ver($Id);
    ?>

    <form action="guardar_edicion.php"  method="post" class="form">
        <div class="padre">
            <input type="hidden" name="Id" value="<?php echo $estudiante['Id']; ?>">
            
            <div class="hijo4">
                <label for="">
                    <p>Nombre</p>
                    <input type="text" name="name" class="name" value="<?php isset($name) ? $name : ''; ?>" required>
                </label>
            </div>
            <div class="hijo5">
                <label for="">
                    <p>Primer apellido</p>
                    <input type="text" name="lastname1" class="lastname" required>
                </label>
            </div>
            <div class="hijo6">
                <label for="">
                    <p>Segundo apellido</p>
                    <input type="text" name="lastname2" class="lastname2" required>
                </label>
            </div>
            <div class="hijo13">
                <label for="">
                    <p>Genero</p>
                    <select name="genus" class="genero" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="56 tipos de gays">56 Tipos de Gays</option>
                    </select>
                </label>
            </div>
            <div class="hijo7">
                <label for="">
                    <p>Correo institucional</p>
                    <input type="email" name="emailins" class="emailins" value="" required>
                </label>
            </div>
            <div class="hijo8">
                <label for="">
                    <p>Correo personal</p>
                    <input type="email" name="emailper" class="imailper" value="" required>
                </label>
            </div>
            <div class="hijo9">
                <label for="">
                    <p>Numero de telefono</p>
                    <input type="text" name="phonenumber" class="phone" value="" required>
                </label>
            </div>
            <div class="hijo10">
                <label for="">
                    <p>Edad</p>
                    <input type="number" name="yearsold" class="year" value="" required>
                </label>
            </div>
            <div class="hijo12">
                <label for="">
                    <p>Direccion</p>
                    <input type="text" name="address" class="direccion" value="" required>
                </label>
            </div>
            <div class="hijo1">
                <input type="submit" name="editar" id="boton" value="Guardar Cambios">
            </div>
        </div>
    </form>
</body>
</html>
