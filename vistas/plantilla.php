<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="SAN/resources/css/registro.css">
    
    <title>Inicio de sesion</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a1a42cdb0e.js" crossorigin="anonymous"></script>

    <script type="text/javascript" language="javascript" src="script_alvaro.js" async></script>

</head>
<body>
    
        <!-- Contenido -->

    <div class="container-fluid">
        
        <div class="container py-4">

            <?php 
                
                # el isset nos ayuda a saber si una variable esta definida o no
                if (isset($_GET["go"])) {   #Si nuestra variable get (llamada go) esta declarada

                    if($_GET["go"] == "VIS_ingreso" or $_GET["go"] == "VIS_registro"){

                        include "paginas/".$_GET["go"].".php"; #aca señalamos que muestre la pagina que tiene la variable get.

                    }else{

                        include "paginas/VIS_error404.php";

                    }
                    
                }else {             #Si no esta declarada...

                    include "paginas/VIS_registro.php";

                }
                
                
                ?>

        </div>
    </div>

</body>
</html>