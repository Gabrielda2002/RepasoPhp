<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosulta</title>
    <link rel="stylesheet" href="../../css/style_query.css">
</head>
<body>
    
        <nav>
        <button id="boton" class="singButtom">
        <span>
        Registrar
        </span>
    </button>
    <script>
        document.getElementById("boton").onclick = function(){
            window.location.href = "../../html/index.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Listar
        </span>
    </button>
    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "inicio.php";
        }
    </script>
    <button id="boton3" class="queryButtom">
        <span>
        Inicio
        </span>
    </button>
    <script>
        document.getElementById("boton3").onclick = function(){
            window.location.href = "../index.php";
        }
    </script>
        </nav>
        <form action="" method="post" class="form-container">
            <div class="padre">
                <div class="hijo2">
                    <p id="text">
                    Ingrese el Numero de ficha que desea consultar
                    </p>
                    <label for="">
                        <div id="imput-container">
                            <input type="number" name="fichaId" id="imput" value="Ficha" required placeholder="Ingrese el numero de ficha">
                        </div>
                    </label>
                </div>
                <div class="hijo3">
                    <input type="submit" name="consultar" value="consultar" id="submit">
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
                        <table class="table-container">
                            <th id="encabezado">
                                <p id="text">
                                    Nombre
                                </p>
                            </th>
                            <th id="encabezado">
                                <p id="text">
                                    Apellido
                                </p>
                            </th>
                            <th id="encabezado">
                                <p id="text">
                                    NumeroDoc
                                </p>
                            </th>
                            <th id="encabezado">
                                <p id="text">
                                    Estado
                                </p>
                            </th>
                        <?php

                        foreach($resultado as $row){
                        ?>
                            <!-- echo "Nombre: ". $row['Nombre']; -->
                            <tr>
                                <td id="data"><?php echo $row['Nombre'];  ?></td> 
                                <td id="data"><?php echo $row['Apellido1'];  ?></td>
                                <td id="data"><?php echo $row['NumDoc'];  ?></td>
                                <td id="data"><?php echo $row['Estado'];  ?></td>
                                
                            </tr>
                            <!-- script para cerrar las llaves del if y el foreach -->
                        <?php
                                }
                            }
                        ?>
                    
                    
                    </table>
                </div>
            </div>
        </form>

</body>
</html>