<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="" method="post">
        <div class="padre">
            <div class="hijo5">
                <h2>
                    Bienvenido a la Pizzaria
                </h2>
            </div>
        <div class="hijo1">
                <label for="" id="text1">
                    Por favor seleccione el tipo de pizza.
                    <br>
                    <select name="typePizza" id="Tpizza" required>
                        <option value="seleccione">seleccione</option>
                        <option value="Vegetariana">Vegetariana</option>
                        <option value="No Vegetariana">No Vegetariana</option>
                    </select>
                </label>
                
                <br>
                <label for="">
                    Tamaño
                    <br>
                    <select name="tamaño" id="tamaño">
                        <option value="seleccionar">Seleccionar</option>
                        <option value="pequeña">6 porciones</option>
                        <option value="mediana">10 porciones</option>
                        <option value="grande">16 porciones</option>
                    </select>
                </label>                  
            </div>
        <div class="hijo2">
            <p id="text">
                Ingredientes vegetariana
            </p>
            <label for="" id="check">
                    <input type="checkbox" name="ingredientes[]" value="piña" class="check" requiered>Piña
            </label>
            <br>
            <label for="" id="check">
                <input type="checkbox" name="ingredientes[]" value="pimientos" class="check" requiered>Pimientos
            </label>
            <br>
            <label for="" id="check">
                <input type="checkbox" name="ingredientes[]" value="aceitunas" class="check" requiered>Aceitunas
            </label>
        </div>
        <div class="hijo3">
            <p id="text">
                Ingredientes No vegetariana
            </p>
            <label for="" id="check">
                <input type="checkbox" name="ingredientes[]" value="jamon" class="check" requiered>Jamon
            </label>
            <br>
            <label for="" id="check">
                <input type="checkbox" name="ingredientes[]" value="peperoni" class="check" requiered>Peperoni
            </label>
            <br>
            <label for="" id="check">
                <input type="checkbox" name="ingredientes[]" value="tocineta" class="check" requiered>Tocineta
            </label>
        </div>

        <div class="hijo4">
            <input type="submit" value="Calcular" class="boton">
            <a href="index.php">Reset</a>
        </div>
        <div class="hijo6">
            <?php
                if($_SERVER["REQUEST_METHOD"] =="POST"){
                    $typepizza = $_POST["typePizza"];
                    $size = $_POST["tamaño"];
                    $ingrediente = count($_POST["ingredientes"]);

                    $precios = [
                        "pequeña" => [1 => 25000, 2 => 35000],
                        "mediana" => [1 => 40000, 2 => 48000],
                        "grande" => [1 => 55000, 2 => 70000]
                    ];

                    if ($typepizza != "seleccione" && $size != "seleccionar" && $ingrediente > 0){
                        $total = 0;
                        if($size == "pequeña"){
                            $total = $precios["pequeña"][$ingrediente];
                        }elseif($size == "mediana"){
                            $total = $precios["mediana"][$ingrediente];
                        }elseif($size == "grande"){
                            $total = $precios["grande"][$ingrediente];
                        }
                        echo "<p class='good'>Ha seleccionado una pizza $typepizza de un tamaño $size, con $ingrediente ingrediente(s) <br>El total a pagar es de $total.</p>";
                        
                    }else{
                        echo "<p class='error'>Por favor, seleccione una opción válida o asegúrese de haber seleccionado las casillas de ingredientes.</p>";
                    }
                }
                ?>
        </div>

        </div>
            
    </form>
</body>
</html>