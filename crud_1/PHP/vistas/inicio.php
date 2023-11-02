<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php
    include_once('../modulos/controlador.php');
    $controlador = new ControladorEstudiante();
    $resultado = $controlador->index();
    ?>
    <div class="padre">
    <nav>
        <ul>
            <li>
                <a href="../index.php">Inicio</a>
            </li>
            <LI>
                <a href="../../html/index.php">Registrar</a>
            </LI>
            <!-- <li>
                <a href="vistas/inicio.php">Listar</a>
            </li> -->
        </ul>
    </nav>
        <!-- tabla de registros de la base de datos -->
        <table>
        <th id="encabezado">
                Id_Usuario
            </th>
            <th id="encabezado">
                Nombre
            </th>
            <th id="encabezado">
                Primer Apellido
            </th>
            <th id="encabezado">
                Segundo Apellido
            </th>
            <th id="encabezado">
                Edad
            </th>
            <th id="encabezado">
                Genero
            </th>
            <th id="encabezado">
                Numero Celular
            </th>
            <th id="encabezado">
                Correo Institucional
            </th>
            <th id="encabezado">
                Correo Personal
            </th>
            <th id="encabezado">
                Direccion
            </th>
            <th id="encabezado">
                Tipo de documento
            </th>
            <th id="encabezado">
                Numero de documento
            </th>
            <th id="encabezado">
                Acciones
            </th>
            
            <?php
                foreach ($resultado as $row){
            ?>
            <tr>
                <td><?php  echo $row['Id']; ?></td>
                <td><?php echo $row['Nombre'];  ?></td>
                <td><?php echo $row['Apellido1'];  ?></td>
                <td><?php echo $row['Apellido2'];  ?></td>
                <td><?php echo $row['Edad'];  ?></td>
                <td><?php echo $row['Sexo'];  ?></td>
                <td><?php echo $row['celular'];  ?></td>
                <td><?php echo $row['EmailInst'];  ?></td>
                <td><?php echo $row['EmailPer'];  ?></td>
                <td><?php echo $row['Direccion'];  ?></td>
                <td><?php echo $row['TipoDoc'];  ?></td>
                <td><?php echo $row['NumDoc'];  ?></td>
                <td> <a href="editar.php?Id=<?php echo $row['Id'];  ?>">Editar</a></td>
                <td><a href="eliminar.php?Id=<?php echo $row['Id'];  ?>" onclick="return confirm('Estas seguro que deseas eliminar el registro?')">Eliminar</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>