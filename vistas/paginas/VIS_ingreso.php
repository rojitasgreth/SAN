<h1> Sistema Automatizado de Notas </h1>  

<form method="post">

    <div class="form-group">
        <label for="email">Email:</label>

        <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" class="form-control" id="email" name="IngresoEmail" required>
        </div>

    </div>


    <div class="form-group">
        <label for="pwd">Password:</label>

        <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" id="pwd" name="IngresoPassword" required>
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
    <a class="btn btn-primary" href="index.php?go=VIS_registro">Registrarse</a>
    <style>
 
  </style>

    <?php
        
        #Instanciacion del método no estático del ingreso al sistema.
        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();

    ?>
</form>