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
        <!-- tabla de registros de la base de datos -->
        <table>
            <th id="encabezado">
                Nombre
            </th>
            <th id="encabezado">
                Primer Apellido1
            </th>
            <th id="encabezado">
                Segundo Apellido1
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
            <?php
                foreach ($resultado as $row){
            ?>
            <tr>
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
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>