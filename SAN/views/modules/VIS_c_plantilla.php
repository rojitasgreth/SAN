<form id='form_p' method='POST'>
    <h1>Registre un estudiante</h1>

    <div class="form-group">

        <label for="user">ID:</label>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa-regular fa-user"></i></span> 
            <input type="text" class="form-control" id="id" name="RegistroId" required> 
        </div>

        <label for="user">Nombre:</label>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa-regular fa-user"></i></span> 
            <input type="text" class="form-control" id="nombre" name="RegistroNombre" required> 
        </div>  

        <label for="user">Apellido:</label>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa-regular fa-user"></i></span> 
            <input type="text" class="form-control" id="apellido" name="RegistroApellido" required> 
        </div> 

        <label for="user">Genero:</label>

        <div class="input-group">
            <select id="genero" name="RegistroGenero">
                <option>Seleccione:</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select>
        </div>

        <label for="user">Grado:</label>
        
        <div class="input-group">
            <select id="grado" name='RegistroGrado'>
                <option>Seleccione:</option>
                <option value="1">1er Grado</option>
                <option value="2">2do Grado</option>
                <option value="3">3er Grado</option>
                <option value="4">4to Grado</option>
                <option value="5">5to Grado</option>
                <option value="6">6to Grado</option>
            </select>
     
        </div>

        <label for="user">Seccion:</label>
        
        <div class="input-group">
            <select id="seccion" name='RegistroSeccion'>
                <option>Seleccione:</option>
                <option value="A">Seccion A</option>
                <option value="B">Seccion B</option>
                <option value="C">Seccion C</option>
            </select>
     
        </div>

        <label for="user">Representante:</label>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa-regular fa-user"></i></span> 
            <input type="text" class="form-control" id="representante" name="RegistroRepresentante" required> 
        </div>         

     

    <?php
 
        #Instancia estatica
        $registro = ControladorFormularios::ctrRegistro();

        if($registro == "ok"){

            /* JS para que limpie las variables POST */

            echo '<script>

            if (window.history.replaceState){

                window.history.replaceState ( null, null, window.location.href );

            }


             </script>';

            /* FIN-JS para que limpie las variables POST */

            #mostramos que el registro fue completado
            echo '<div class="alert alert-success">Registro Completado</div>';
        }

        if($registro == "no_ok"){

            #mostramos que el registro fue erroneo
            echo '<div class="alert alert-danger">Error</div>';
        }

        
    ?>

    <button type="submit" class="btn btn-segundary">Registrarse</button>

    </div>


</form>
