<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosulta</title>
    <link rel="stylesheet" href="../../css/style_query.css">
</head>
<body>
    <div class="padre">
        <nav>
            <ul>
                <LI>
                    <a href="../html/index.php">Registrar</a>
                </LI>
                <li>
                    <a href="inicio.php">Listar</a>
                </li>
                <li id="accesoBar">
                    <a href="vistas/editar.php">Actualizar</a>
                </li>
                <li>
                    <a href="../index.php">Inicio</a>
                </li>
            </ul>
        </nav>

        <form action="" method="post">
                <div class="hijo2">
                    <label for="">
                        Ingrese el Numero de ficha que desea consultar
                        <input type="number" name="fichaId" id="" value="Ficha">
                    </label>
                </div>
                <div class="hijo3">
                    <input type="submit" name="consultar" value="consultar" id="">
                </div>
                <div class="hijo4">
                    <!-- agregando script de php para hacer la consulta en la base de datos -->
                    <?php
                    include_once('../modulos/Estudiantes.php');
                    if (isset($_POST['consultar'])) {
                        $fichaId = $_POST['fichaId'];
                        $estudiante = new Estudiante();

                        $resultado = $estudiante->consultaFicha($fichaId);

                        ?>
                        <table>
                            <th id="encabezado">
                                Nombre
                            </th>
                            <th id="encabezado">
                                Apellido
                            </th>
                            <th id="encabezado">
                                NumeroDoc
                            </th>
                            <th id="encabezado">
                                Estado
                            </th>
                        <?php

                        foreach($resultado as $row){
                        ?>
                            <!-- echo "Nombre: ". $row['Nombre']; -->
                            <tr>
                                <td><?php echo $row['Nombre'];  ?></td> 
                                <td><?php echo $row['Apellido1'];  ?></td>
                                <td><?php echo $row['NumDoc'];  ?></td>
                                <td><?php echo $row['Estado'];  ?></td>
                                
                            </tr>
                            <!-- script para cerrar las llaves del if y el foreach -->
                        <?php
                                }
                            }
                        ?>
                    
                    
                    </table>
                </div>
                
        </form>
    </div>

</body>
</html>=