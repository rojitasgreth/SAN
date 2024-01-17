<h1> Registro </h1> 
<style>

  </style>

<form id="form" method="post"> <!-- GET muestra los datos en la url / POST no muestra ningun dato -->

    <div class="form-group">
        <label for="user">User:</label>

        <div class="input-group">
        <!-- aca le ponemos el icono dentro del input con <i>, es importante usar los div para separar y usamos el <span> para no generar una nueva linea -->
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span> 
            <input type="text" class="form-control" id="user" name="RegistroUser" required>
        <!-- si no ponemos el span y el input en el mismo div, quedara uno encima de otroy no se veran juntos -->
        </div>  

    </div>


    <div class="form-group">
        <label for="email">Email:</label>

        <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" id="email" name="RegistroEmail" required>
        </div>

    </div>


    <div class="form-group">
        <label for="pwd">Password:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" id="pwd" name="RegistroPassword" required>
        </div>

        <div class="form-group">
        <label for="pwd">Confirmar Password:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" id="pwd2" name="RegistroPassword2" required>
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Registrarse</button>
    <a class="btn btn-primary" href="index.php?go=VIS_ingreso">Logearse</a>

    <?php
 

        #Instancia estatica del método para registrarse.
        $registro = ControladorFormularios::ctrRegistro();

        #Se borran los datos del post una vez enviados para que se quite el cuadro verde al recargar la pagina.
        #Con la condicional verificamos si hay datos almacenados y despues los vaciamos con null y volvemos a la url.
         echo '<script> 
            
        if ( window.history.replaceState ) {    

            window.history.replaceState( null, null, window.location.href );
            
        }
        </script>';

        if($registro == "existe"){

            #Mensaje al usuario que muestra que el registro ya existe.
            echo '<div class="alert alert-danger">El usuario ya existe</div>';
        }

        if($registro == "ok"){

            #Mensaje al usuario que muestra que el registro fue completado.
            echo '<div class="alert alert-success">Registro Completado</div>';
        }

    ?>
</form>
