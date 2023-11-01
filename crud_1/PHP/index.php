<?php
    include_once("modulos/enrutador.php");
    include_once("modulos/controlador.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                <a href="vistas/consultaFicha.php">Cosulta por ficha</a>
            </li>
        </ul>
    </nav>
    <?php
        $enrutador = new Enrutador();
        if(isset($_GET["cargar"])   &&   $enrutador->validarGet($_GET['cargar'])){
            $enrutador->cargarModulo($_GET['cargar']);
        }
        
    ?>
</body>
</html