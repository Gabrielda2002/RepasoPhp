<?php
    include_once("modulos/enrutador.php");
    include_once("modulos/controlador.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/style_query.css">
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
            window.location.href = "../html/index.php";
        }
    </script>
    <button id="boton2" class="listButtom">
        <span>
        Listar
        </span>
    </button>
    <script>
        document.getElementById("boton2").onclick = function(){
            window.location.href = "vistas/inicio.php";
        }
    </script>
    <button id="boton3" class="queryButtom">
        <span>
        consultar por ficha
        </span>
    </button>
    <script>
        document.getElementById("boton3").onclick = function(){
            window.location.href = "vistas/consultaFicha.php";
        }
    </script>
    </nav>
    <?php
        $enrutador = new Enrutador();
        if(isset($_GET["cargar"])   &&   $enrutador->validarGet($_GET['cargar'])){
            $enrutador->cargarModulo($_GET['cargar']);
        }
        
    ?>
</body>
</html