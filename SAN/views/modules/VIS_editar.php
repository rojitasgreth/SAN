<?php

    #preguntamos si traemos una varibale ID. Deberia de venir x el boton de modificar
    if(isset($_GET["id"])){

        $item = "id";           #busca coincidencias en la columna id
        $valor = $_GET["id"];    #busca que sea igual a el id que traiga la varible GET

        $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);

    }

?>



<form id="form" method="post"> <!-- GET muestra los datos en la url / POST no muestra ningun dato -->

    <div class="form-group">
        <label for="user">User:</label>

        <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span> <!-- aca le ponemos el icono dentro del input con <i>, es importante usar los div para separar y usamos el <span> para no generar una nueva linea -->
            <input type="text" class="form-control" id="user" name="ActualizarUser" value="<?php echo $usuario["user"]; ?>" required> <!-- si no ponemos el span y el input en el mismo div, quedara uno encima de otroy no se veran juntos -->
        </div>  

    </div>


    <div class="form-group">

        <label for="email">Email:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" id="email" name="ActualizarEmail" value="<?php echo $usuario["email"]; ?>" required>
        </div>

    </div>


    <div class="form-group">

        <label for="pwd">Password:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" id="pwd" name="ActualizarPassword">
        </div>

        <input type="hidden" name="ActualPassword" value="<?php echo $usuario["password"]; ?>" >
        <input type="hidden" name="Id" value="<?php echo $usuario["id"]; ?>" >


    </div>

        <div class="form-group">

        <label for="pwd">Status:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input class="form-control" id="pwd" name="ActualizarStatus" value="<?php echo $usuario["status"]; ?>" required>
        </div>

    </div>

    <div class="form-group">

        <label for="pwd">Cargo:</label>

        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input class="form-control" id="pwd" name="ActualizarCargo" value="<?php echo $usuario["cargo"]; ?>" required>
        </div>

    </div>


    <?php

        #metodo no estatico: instanciamos
        $actualizar = new ControladorFormularios;	
        $actualizar	-> ctrActualizarRegistro();
    ?>
    <button type="submit" class="btn btn-primary">Actualizar</button>



</form>
