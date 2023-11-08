<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura selectiva 2</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" method="post">
        <div class="padre">
            <div class="hijo1">
                <p id="text">
                Por favor seleccione su genero.
                </p>
                <label id="" for="">
                    <select name="genero" class="genero">
                        <option value="Seleccione" name="seleccionar">Seleccione</option>
                        <option value="Femenino" name="Femenino">Femenino</option>
                        <option value="Masculino" name="Masculino">Masculino</option>
                    </select>
                </label>
            </div>
            <div class="hijo2">
                <p id="text">
                Ingrese su puntaje en el examen.
                </p>
                <label for="" id="text1">
                    
                    <input type="number" name="score" class="inputScore" required placeholder="Ingresar aqui.">

                </label>
            </div>
            <div class="hijo3">
                <input type="submit" class="submit">
            </div>
            <div class="hijo4">
                <!-- se implementa el codigo php -->
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $genero = $_POST['genero'];
                $puntaje = $_POST['score'];

                if($genero == "Masculino" and $puntaje >= 18 and $puntaje <=35){
                    echo "<h5>Usted viajara a Bogota.</h5>";
                }elseif($genero == "Femenino" and $puntaje >= 18 and $puntaje <=35){
                    echo "<h5>Usted viajara a Cali.</h5>";
                }elseif($genero == "Masculino" and $puntaje >= 36 and $puntaje <=75){
                    echo "<h5>Usted viajara a Pereira.</h5>";
                }elseif($genero == "Femenino" and $puntaje >= 36 and $puntaje <=75){
                    echo "<h5>Usted viajara a Armenia.</h5>";
                }elseif($genero == "Femenino" and $puntaje > 75){
                    echo "<h5>Usted viajara a Rioacha.</h5>";
                }else{
                    echo "<h5>Usted viajara a Medellin.</h5>";
                }   
            }
            ?>
            </div>
        </div> 
    </form>
</body>
</html>