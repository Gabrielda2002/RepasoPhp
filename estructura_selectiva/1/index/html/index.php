<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura selectiva 2</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="padre">
        <form action="" class="form" method="post">
            <div class="hijo">
                <label for="">
                   <p class="text"> Ingrese su puntaje </p>
                    <input type="number" class="input1" name="puntaje" required placeholder="aqui">
                </label>
                <br>
                <input type="submit" class="submit" value="Enviar">
                <a href="index.php" class="reset">restablecer</a>

                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){   
                    $puntaje = $_POST['puntaje'];

                    if ($puntaje % 10 == 0) {
                        if ($puntaje < 60){
                            echo "<h5>Usted no aplica para ninguna carrera</h5>";
                        }elseif ($puntaje == 70) {
                            echo "<h5>Usted aplico para la carrera de Administracion.</h5> ";

                        }elseif ($puntaje == 80){
                            echo "<h5>Usted aplico para la carrera de Industrial.</h5> ";

                        }elseif ($puntaje == 90){
                            echo "<h5>Usted aplico para la carrera de Electronica.</h5> ";

                        }elseif ($puntaje == 100){
                            echo "<h5>
                            <ul>Usted puede aplicar para las siguientes carreras
                                <li> Administracion. </li>
                                <li> Industrial. </li>
                                <li> Electronica. </li>
                                <li> Sistemas. </li>
                                </ul>
                            </h5>"; 
                        }
                    }
                }
                    
                ?>
            </div>
        </form>
    </div>
</body>
</html>