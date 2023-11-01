<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosulta</title>
</head>
<body>
    <div class="padre">
        <nav>
            <ul>
                <LI>
                    <a href="../html/index.php">Registrar</a>
                </LI>
                <li>
                    <a href="vistas/inicio.php">Listar</a>
                </li>
                <li id="accesoBar">
                    <a href="vistas/editar.php">Actualizar</a>
                </li>
                <li>
                    <a href="../index.php">Inicio</a>
                </li>
            </ul>
        </nav>

        <div class="hijo2">
            <label for="">
                Ingrese el Numero de ficha que desea consultar
                <input type="number" name="Id" id="" value="Ficha">
            </label>
        </div>
        <div class="hijo2">
            <input type="submit" name="consultar" value="consultar" id="">
        </div>
    </div>


</body>
</html>