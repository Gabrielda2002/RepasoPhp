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
            <div class="hijo1">
                <h5>
                    Calcular monto
                </h5>
            </div>
            <div class="hijo2">
                <label for="" class="text">
                    Por favor seleccione su rol.
                    <select name="rol" id="rol" required>
                        <option value="seleccione">Seleccione</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Contador">Contador</option>
                        <option value="Empleado">Empleado</option>
                    </select>
                </label>
            </div>
            <div class="hijo3">
                <label for="" class="text">
                    Ingrese los años que lleva en la emporesa
                    <input type="number" name="years" required class="year">
                </label>
            </div>
            <div class="hijo4">
                <input type="submit" class="submit">
            </div>
            <div class="hijo4">

            <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="padre">
            <!-- ... (código del formulario) ... -->
            <div class="hijo4">
                <input type="submit" class="submit">
            </div>
            <div class="hijo4">
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
        </div>
    </form>
</body>
</html>

            </div>
</body>
</html>