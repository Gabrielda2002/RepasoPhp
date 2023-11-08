<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura selectiva 3</title>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>
    <form action="" class="form-container" method="post">
        <div class="padre">
            <div class="hijo1">
                <p class="text">
                    Calcular monto
                </p>
            </div>
            <div class="hijo2">
                <label for="" class="">
                    <p class="text-select">
                        Por favor seleccione su rol:
                    </p>
                    <div class="select-container">
                    <select name="rol" id="rol" required>
                        <option value="seleccione">Seleccione</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Contador">Contador</option>
                        <option value="Empleado">Empleado</option>
                    </select>
                    </div>
                </label>
            </div>
            <div class="hijo3">
                <label for="" class="text">
                    <input type="number" name="years" required class="year" placeholder="Ingrese su edad">
                </label>
            </div>
            <div class="hijo4">
                <input type="submit" class="submit">
            </div>

            <div class="hijo5">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $rol = $_POST["rol"];
                    $years = $_POST["years"];
                    
                    $monto = 0;

                    if ($rol == "Administrador") {
                        if ($years >= 0 && $years <= 2) {
                            $monto = 2000;
                        } elseif ($years >= 3 && $years <= 5) {
                            $monto = 2500;
                        } elseif ($years >= 6 && $years <= 8) {
                            $monto = 3000;
                        } else {
                            $monto = 4000;
                        }
                    } elseif ($rol == "Contador") {
                        // ... (condiciones para Contador) ...
                    } elseif ($rol == "Empleado") {
                        // ... (condiciones para Empleado) ...
                    }

                    echo "<p id='answer'>Su monto es de $monto </p>";
                }
                ?>
            </div>
    </form>
</div>
</body>
</html>