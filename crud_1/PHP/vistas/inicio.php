<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de registros</title>
    <link rel="stylesheet" href="../../css/style_list.css">
</head>
<body>
    <?php
    include_once('../modulos/controlador.php');
    $controlador = new ControladorEstudiante();
    $resultado = $controlador->index();
    ?>
    <div class="padre">
    <nav>
    <button id="boton" class="singButtom">
        <span>
        Inicio
        </span>
    </button>
    <script>
        document.getElementById("boton").onclick = function(){
            window.location.href = "../index.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Registrar
        </span>
    </button>
    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "../../html/index.php";
        }
    </script>
    </nav>
        <!-- tabla de registros de la base de datos -->
        <table class="table-container">
        <th id="encabezado" class="colum-table">
                <p id="text">
                    Id_Usuario
                </p>
            </th>
            
            <th id="encabezado">
                <p id="text">
                    Nombre
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Primer Apellido
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Segundo Apellido
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Edad
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Genero
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Numero Celular
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Correo Institucional
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Correo Personal
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Direccion
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Tipo de documento
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Numero de documento
                </p>
            </th>
            <th id="encabezado">
                <p id="text">
                    Acciones
                </p>
            </th>
            
            <?php
                foreach ($resultado as $row){
            ?>
            <tr>
                <td id="data"><?php  echo $row['Id']; ?></td>
                <td id="data"><?php echo $row['Nombre'];  ?></td>
                <td id="data"><?php echo $row['Apellido1'];  ?></td>
                <td id="data"><?php echo $row['Apellido2'];  ?></td>
                <td id="data"><?php echo $row['Edad'];  ?></td>
                <td id="data"><?php echo $row['Sexo'];  ?></td>
                <td id="data"><?php echo $row['celular'];  ?></td>
                <td id="data"><?php echo $row['EmailInst'];  ?></td>
                <td id="data"><?php echo $row['EmailPer'];  ?></td>
                <td id="data"><?php echo $row['Direccion'];  ?></td>
                <td id="data"><?php echo $row['TipoDoc'];  ?></td>
                <td id="data"><?php echo $row['NumDoc'];  ?></td>
                <td id="data"> <a href="editar.php?Id=<?php echo $row['Id'];  ?>">Editar</a></td>
                <td id="data"><a href="eliminar.php?Id=<?php echo $row['Id'];  ?>" onclick="return confirm('Estas seguro que deseas eliminar el registro?')">Eliminar</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>