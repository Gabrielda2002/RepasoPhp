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
            <li>
                <a href="index.php">Inicio</a>
                
            </li>
            <LI>
                <a href="../html/index.php">Registrar</a>
            </LI>
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